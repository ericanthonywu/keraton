<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\LokasiUnit;
use App\Models\Sale;
use App\Models\Token;
use App\Models\BannerParticipant;
use App\Models\Unit;
use App\Models\UnitFile;
use App\Models\Message;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class apiandroid extends Controller
{
    function Image($param, $file)
    {
        return url("uploads/$param/$file");
    }

    function insertimage($disk, $file_name, $r)
    {
        $file = $r->file($file_name);
        $filename = Str::random(1) . Str::random(100) . time() . "." . $file->getClientOriginalExtension();
        \Storage::disk($disk)->put($filename, File::get($file));
        return $filename;
    }

    function response($status, $message, $data, $header = null)
    {
        return response()->json([
            "status" => (int)$status,
            "message" => $message,
            "data" => $data == "[]" || empty($data) ? new \stdClass() : $data,
        ], $header ? (int)$header : 200);
    }

    function gethome(Request $r)
    {
        $req = $r->all();
        $data = Banner::orderBy('order', 'asc')->get();
        foreach ($data as $key => $data_banner) {
            $data[$key]['imgUrl'] = $this->Image("banner", "$data_banner[file]");
        }
        $datatoken = Token::where("token_old", $req['apiKey'])->orWhere('token_new', $req['apiKey'])->first();
        return $this->response(1, '', [
            "banner" => $data,
            "user_login" => User::find($datatoken['user'])['name']
        ]);
    }

    function confirmbanner(Request $r)
    {
        $req = $r->all();
        $data_token = Token::where("token_old", $req['apiKey'])->orWhere('token_new', $req['apiKey'])->get();
        $check_user = BannerParticipant::where([
            "user" => $data_token[0]['user'],
            "banner" => $r->banner
        ]);
        if ($data_token) {
            $req['user'] = $data_token[0]['user'];
            if (!$check_user->exists()) {
                unset($req['apiKey']);
                BannerParticipant::create($req);
                return $this->response(1, 'Data Sudah Masuk', new \stdClass());
            } else {
                return $this->response(1, 'Anda sudah terdaftar', new \stdClass());
            }

        } else {
            return $this->response(0, 'Token expired', new \stdClass());
        }
    }

    function getunit()
    {
        $data = Unit::all();
        foreach ($data as $k => $data_unit) {
            $data[$k]['lokasi'] = LokasiUnit::find($data_unit['lokasi_fix'])['lokasi'] . ", " . $data_unit['lokasi_text'];
            $data_gmbr_unit = UnitFile::where('unitID', $data_unit['id'])->get();
            foreach ($data_gmbr_unit as $k_unit => $v_unit) {
                $data_gmbr_unit[$k_unit]['image'] = url("/uploads/unit/$v_unit[image]");
            }
            $data[$k]['gambar_unit'] = $data_gmbr_unit;
        }
        return $this->response(1, 'Data Unit', [
            "unit" => $data
        ]);
    }

    function sale(Request $r)
    {
        if (empty($r->unit) or !isset($r->unit)) {
            return $this->response(0, 'Unit harus diisi', new \stdClass());
        }
        $req = $r->all();
        $check = Sale::where('id', $r->salesid)->exists();
        if (!$check) {
            $data_token = Token::where("token_old", $req['apiKey'])->orWhere('token_new', $req['apiKey'])->get();
            $req['created_by'] = $data_token[0]['user'];
            $arrfile = ['ktp', 'konsumen', 'pasangan', 'npwp', 'gaji', 'kerja', 'spt'];
            for ($x = 0; $x < count($arrfile); $x++) {
                if ($r->hasFile("foto$arrfile[$x]")) {
                    $req["foto$arrfile[$x]"] = $this->insertimage($arrfile[$x], "foto$arrfile[$x]", $r);
                }
            }
            unset($req['apiKey']);
            $req['id'] = $r->salesid;
            $id = Sale::create($req);
            foreach ($id as $v) {
                for ($x = 0; $x < count($arrfile); $x++) {
                    $id["urlfoto$arrfile[$x]"] = $id["foto$arrfile[$x]"] ? url("uploads/$arrfile[$x]/" . $id["foto$arrfile[$x]"]) : null;
                }
            }
            foreach ($id as $v) {
                for ($x = 0; $x < count($arrfile); $x++) {
                    unset($id["foto$arrfile[$x]"]);
                }
                unset($id['id']);
                $id['salesid'] = (int)$r->salesid;
            }

            $unit = Unit::find($r->unit)['nama'];
            return $this->response(1, "Sale baru berhasil di upload \n $r->nama : $unit", $id);
        } else if ($check) {
            if (empty($r->salesid) or !isset($r->salesid)) {
                return $this->response(0, 'Sales harus diisi', new \stdClass());
            }
            $arrfile = ['ktp', 'konsumen', 'pasangan', 'npwp', 'gaji', 'kerja', 'spt'];
            for ($x = 0; $x < count($arrfile); $x++) {
                if ($r->hasFile("foto$arrfile[$x]")) {
                    $req["foto$arrfile[$x]"] = $this->insertimage($arrfile[$x], "foto$arrfile[$x]", $r);
                }
            }
            unset($req['apiKey']);
            unset($req['salesid']);
            Sale::find($r->salesid)->update($req);
            $data_id = Sale::find($r->salesid);
            foreach ($data_id as $v) {
                for ($x = 0; $x < count($arrfile); $x++) {
                    $data_id["urlfoto$arrfile[$x]"] = $data_id["foto$arrfile[$x]"] ? url("uploads/$arrfile[$x]/" . $data_id["foto$arrfile[$x]"]) : null;
                }
            }
            foreach ($data_id as $v) {
                for ($x = 0; $x < count($arrfile); $x++) {
                    unset($data_id["foto$arrfile[$x]"]);
                }
            }
            $unit = Unit::find($r->unit)['nama'];
            return $this->response(1, "Sale Lama berhasil di update \n $r->nama : $unit ", $data_id);
        } else if ($r->has('id') && !$r->has('unit')) {
            Sale::find($r->salesid)->delete();
            return $this->response(1, "Sale $r->id berhasil di hapus", new \stdClass());
        }
    }

    function historysale(Request $r)
    {
//            $req = $r->all();
        $data_token = Token::where("token_old", $r->apiKey)->orWhere('token_new', $r->apiKey)->get();
        $id_user = $data_token[0]['user'];
        $data_id = Sale::where('created_by', $id_user)->get();
        $arrfile = ['ktp', 'konsumen', 'pasangan', 'npwp', 'gaji', 'kerja', 'spt'];
        foreach ($data_id as $k => $v) {
            for ($x = 0; $x < count($arrfile); $x++) {
                $data_id[$k]["urlfoto$arrfile[$x]"] = $v["foto$arrfile[$x]"] ? url("uploads/$arrfile[$x]/" . $v["foto$arrfile[$x]"]) : null;
            }
        }
        foreach ($data_id as $key => $v) {
            for ($x = 0; $x < count($arrfile); $x++) {
                unset($data_id[$key]["foto$arrfile[$x]"]);
            }
            if ($v['fotoktp'] && $v['fotokonsumen'] && $v['fotopasangan'] && $v['fotonpwp'] && $v['fotokerja'] && $v['fotospt'] && !$v['paid_status']) {
                $data_id[$key]['status'] = 1;
            } else if ($v['fotoktp'] && $v['fotokonsumen'] && $v['fotopasangan'] && $v['fotonpwp'] && $v['fotokerja'] && $v['fotospt'] && $v['paid_status']) {
                $data_id[$key]['status'] = 2;
            } else if ($v['cancel_status']) {
                $data_id[$key]['status'] = 3;
            } else {
                $data_id[$key]['status'] = 0;
            }
            $data_unit = Unit::find($v['unit']);
            $data_id[$key]['unit_name'] = $data_unit['nama'];
            $data_id[$key]['unit_photo'] = url('uploads/unit/' . UnitFile::where('unitID', $data_unit['id'])->get()[0]['image'] . '');
            $data_id[$key]['unit_price'] = (int)$data_unit['harga'];
            $data_id[$key]['unit_location'] = LokasiUnit::find($data_unit['lokasi_fix'])['lokasi'] . ", " . $data_unit['lokasi_text'];

//            unset($data_id[$k]['created'])
        }

        return $this->response(1, 'Data Histori Marketing', [
            "History" => $data_id
        ]);
    }

    function inbox(Request $r)
    {
        $datatoken = Token::where("token_old", $r->apiKey)->orWhere('token_new', $r->apiKey)->first();
        $user = User::find($datatoken['user'])['name'];
        $data = Message::where('marketing', $datatoken['user'])->orderByDesc('created_at')->get();
        foreach ($data as $k => $v) {
            $data[$k]['tanggal_dibuat'] = date('d') == $v['created_at']->format('d') ? "Hari Ini " . $v['created_at']->format('H:i') : $v['created_at']->format('D, d M H:i');
        }
        return $this->response(1, "Data Inbox $user", [
            "inbox" => $data
        ]);
    }

    function profile(Request $r)
    {
        $datatoken = Token::where("token_old", $r->apiKey)->orWhere('token_new', $r->apiKey)->first();
        if($r->hasFile('propic')) {
            $file = $r->file('propic');
            $filename = Str::random(1) . Str::random(100) . time() . "." . $file->getClientOriginalExtension();
            \Storage::disk('marketing')->put($filename, File::get($file));
            $update = User::find($datatoken['user']);
            $update->profile_picture = $filename;
            $update->save();
        }
        if($r->has('nohp')){
            $update = User::find($datatoken['user']);
            $update->nohp = $r->nohp;
            $update->save();
        }
        if($r->has('nama')){
            $update = User::find($datatoken['user']);
            $update->name = $r->nama;
            $update->save();
        }
        if($r->has('email')){
            $update = User::find($datatoken['user']);
            if($update['email'] !== $r->email){
                if (!$update->exists()) {
                    $update->email = $r->email;
                    $update->save();
                } else {
                    return $this->response(1, 'Email Sudah Tersedia',new \stdClass());
                }
            }
        }

        $data = User::find($datatoken['user']);

        $data['tanggal_dibuat'] = $data['created_at']->format('D, d M Y H:i');
        unset($data['lat']);
        unset($data['long']);
        $data['urlprofile_picture'] = $this->Image('marketing',$data['profile_picture']);
        unset($data['profile_picture']);
        return $this->response(1, "Profile marketing $data[name]", $data);
    }
}
