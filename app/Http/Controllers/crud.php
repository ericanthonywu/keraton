<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\Logging;
use App\Models\Sale;
use App\Models\Token;
use App\Models\Unit;
use App\Models\UnitFile;
use App\Models\User;
use App\Models\LokasiUnit;
use App\Models\Message;
use Carbon\Carbon;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;
use Session;
use SimpleXMLElement;
use Storage;
use Validator;

class crud extends Controller
{
    public function sendsms($nohp,$pesan){
        $url = "https://alpha.zenziva.net/apps/smsapi.php";
        $curlHandle = curl_init();
        curl_setopt($curlHandle, CURLOPT_URL, $url);
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, "userkey=rfd24w&passkey=@PtKAS$&nohp=$nohp&pesan=".urldecode($pesan));
        curl_setopt($curlHandle, CURLOPT_HEADER, 0);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curlHandle, CURLOPT_TIMEOUT,30);
        curl_setopt($curlHandle, CURLOPT_POST, 1);
        $results = curl_exec($curlHandle);
        curl_close($curlHandle);

        $XMLdata = new SimpleXMLElement($results);
        $status = $XMLdata->message[0]->text;
        return $status;
    }
    public function push_notification($body, $title, $data, $token)
    {
        $fcmUrl = 'https://fcm.googleapis.com/fcm/send';

        $notification = [
            'title' => $title,
            'body' => $body,
            'sound' => true,
        ];

        $fcmNotification = [
            //'registration_ids' => $tokenList, //multple token array
            'to' => $token, //single token
            'notification' => $notification,
            'data' => $data
        ];

        $headers = [
            'Authorization: key= AIzaSyCM9iFzmMXWVf8KZurqlMGL_5_7yE9RPxE',
            'Content-Type: application/json'
        ];


        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $fcmUrl);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fcmNotification));
        $result = curl_exec($ch);
        curl_close($ch);
    }
    public function log($desc)
    {
        $user = '';
        switch (Session::get('level')) {
            case 3:
                $user =  "<b>". Session::get('users') . "</b> (Super Admin)";
                break;
            case 2:
                $user =  "<b>". Session::get('users') . "</b> (Admin)";
                break;
            case 1:
                $user = "<b>".  Session::get('users') . "</b> (Manager)";
                break;
        }

        $log = new Logging();
        $log->activity = $user . $desc;
        $log->save();
    }
    function export(Request $r){
        $export = str_replace('_',' ',$r->data_export);
        $this->log(" export $export");
    }

    public function lvl($lvl)
    {
        switch ($lvl) {
            case 3:
                return "Super Admin";
            case 2:
                return "Admin";
            case 1:
                return "Manager";
        }
    }

    function delete(Request $r, $table)
    {
        if (Session::get('level') == 3) {
            $data = DB::table($table)->where('id', $r->id)->first();
            $datadel = '';
            switch ($table){
                case "admin":
                    $datadel = $data->name;
                    break;
                case "users":
                    $datadel = $data->name;
                    break;
                case "banner":
                    $datadel = "banner : ".$data->nama;
                    break;
                case "unit":
                    $datadel = "unit : ".$data->nama;
                    break;
            }
            $this->log(" delete " . $datadel);
            DB::table($table)->where('id', $r->id)->delete();
            return null;
        } else {
            return "Anda tidak memiliki HAK AKSES Untuk Menghapus";
        }
    }

    function tambah_user(Request $r)
    {
        if (!filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
            return "Email Invalid";
        }
        $checkemail = Admin::where('email', $r->email);
        $checkname = Admin::where('name', $r->name);
        if ($checkname->exists() && $checkemail->exists()) {
            return "Username dan Email sudah tersedia";
        } else if ($checkname->exists()) {
            return "Username Sudah Tersedia";
        } else if ($checkemail->exists()) {
            return "Email Sudah Tersedia";
        }
        $req = $r->all();
        $req['password'] = bcrypt($req['password']);
        $req['emailst'] = 0;
        $req['created_by'] = $r->created_by ? $r->created_by : (int)Session::get('userID');
        Admin::create($req);
        $this->log(" create (" . $this->lvl($r->level) .") : <b>". $r->name ."</b>");
        return null;
    }

    function edit_user(Request $r)
    {
        if (!filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
            return "Email Invalid";
        }
        $data = Admin::find($r->id);
        $checkemail = Admin::where('email', $r->email);
        $checkname = Admin::where('name', $r->name);
        if ($checkname->exists() && $r->name !== $data->name && $checkemail->exists() && $r->email !== $data->email) {
            return "Username dan Email sudah tersedia";
        } else if ($checkname->exists() && $r->name !== $data->name) {
            return "Username Sudah Tersedia";
        } else if ($checkemail->exists() && $r->email !== $data->email) {
            return "Email Sudah Tersedia";
        }
        $data->username = $r->username;
        if ($r->password) {
            $data->password = bcrypt($r->password);
        }
        $data->email = $r->email;
        $data->name = $r->name;
        $data->created_by = $r->created_by ? $r->created_by : (int)Session::get('userID');
        $data->save();
        $this->log(" update (" . $this->lvl($r->level) .") : <b>". $r->name."</b>");
        return null;
    }

    function tambah_marketing(Request $r)
    {
        if (!filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
            return "Email Invalid";
        }
        $checkemail = User::where('email', $r->email);
        $checkname = User::where('name', $r->name);
        if ($checkname->exists() && $checkemail->exists()) {
            return "Username dan Email sudah tersedia";
        } else if ($checkname->exists()) {
            return "Username Sudah Tersedia";
        } else if ($checkemail->exists()) {
            return "Email Sudah Tersedia";
        }
        $req = $r->all();
        $req['password'] = bcrypt($req['password']);
        $req['created_by'] = $r->created_by ? $r->created_by : (int)Session::get('userID');
        User::create($req);
        $this->log(" create (marketing) : <b>". $r->name."</b>");
    }

    function edit_marketing(Request $r)
    {
        if (!filter_var($r->email, FILTER_VALIDATE_EMAIL)) {
            return "Email Invalid";
        }
        $data = User::find($r->id);
        $checkemail = User::where('email', $r->email);
        $checkname = User::where('name', $r->name);
        if ($checkname->exists() && $checkemail->exists() && $data->name !== $r->name && $data->email !== $r->email) {
            return "Username dan Email sudah tersedia";
        } else if ($checkname->exists() && $data->name !== $r->name) {
            return "Username Sudah Tersedia";
        } else if ($checkemail->exists() && $data->email !== $r->email) {
            return "Email Sudah Tersedia";
        }
        $data->name = $r->name;
        $data->email = $r->email;
        if ($r->password) {
            $data->password = bcrypt($r->password);
        }
        $data->created_by = $r->created_by ? $r->created_by : (int)Session::get('userID');
        $data->save();
        $this->log(" update (marketing) : <b>". $r->name."</b>");
    }

    function tambah_banner(Request $r)
    {
        $validator = Validator::make($r->all(), [
            'nama' => 'required',
            'file' => 'required',
        ]);
        if ($validator->fails()) {
            return $validator->errors();
        }
        $file = $r->file('file');
        $filename = str_replace(' ', '_', Session::get('users')) . "_" . Str::random(10) . time() . "." . $file->getClientOriginalExtension();
        Storage::disk('banner')->put($filename, File::get($file));
        //----------------------------------------------------------
        $req = $r->all();
        $req['name_file'] = $file->getClientOriginalName();
        $req['file'] = $filename;
        $data = Banner::orderByDesc('order')->limit('1')->first();
        $req['order'] = $data['order'] ? (int)$data->order + 1 : 1;
        Banner::create($req);
        $this->log(' create banner : <b>'.$req['nama'].'</b>');
        return null;
    }

    function edit_banner(Request $r)
    {
        $data = Banner::find($r->id);
        $this->log(" update banner from <b>$data[nama]</b> to <b>$r->nama</b> ");
        $data->nama = $r->nama;
        if ($r->hasFile('file')) {
            $file = $r->file('file');
            $filename = str_replace(' ', '_', Session::get('users')) . "_" . Str::random(10) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('banner')->put($filename, File::get($file));
            $data->file = $filename;
            $data->name_file = $file->getClientOriginalName();
        }
        $data->phone = $r->phone;
        $data->lat = $r->lat;
        $data->long = $r->long;
        $data->url = $r->url;
        $data->confirmation = $r->confirmation;
        $data->save();
        return null;
    }

    function edit_order_banner(Request $r)
    {
        $this->log(" update order banner ");
        $data = explode(',', $r->order);
        for ($x = 0; $x < count($data); $x++) {
            $exp = explode('-', $data[$x]);
            $banner = Banner::find($exp[1]);
            $banner->order = $exp[0];
            $banner->save();
        }
        return null;
    }

    function tambah_unit(Request $r)
    {
        $req = $r->all();
        unset($req['foto']);
        $req['created_by'] = (int)Session::get('userID');
        $id = Unit::create($req)->id;
        $file = $r->file('foto');
        foreach ($file as $foto) {
            $filename = str_replace(' ', '_', Session::get('users')) . "_" . Str::random(10) . time() . "." . $foto->getClientOriginalExtension();
            Storage::disk('unit')->put($filename, File::get($foto));
            $data = UnitFile::orderByDesc('order')->limit('1')->first();
            $unit = new UnitFile();
            $unit->unitID = $id;
            $unit->image = $filename;
            $unit->order = $data['order'] ? (int)$data->order + 1 : 1;
            $unit->save();
        }
        $this->log(" create unit <b>$r->nama</b> ");
        return null;
    }

    function edit_unit(Request $r)
    {
        $data = Unit::find($r->id);
        if (Session::get('level') == 3 or Session::get('userID') == $data['created_by']) {
            $this->log(" update unit from <b>$data[nama]</b> to <b>$r->nama</b> ");
            $data->nama = $r->nama;
            $data->lokasi_fix = $r->lokasi_fix;
            $data->lokasi_text = $r->lokasi_text;
            $data->harga = $r->harga;
            $data->description = $r->description;
            $data->save();
        } else {
            return "Hanya Super Admin dan Pembuat yang boleh mengedit Unit ini";
        }
    }

    function tambah_foto_unit(Request $r)
    {
        $file = $r->file('foto');
        $filename = str_replace(' ', '_', Session::get('users')) . "_" . Str::random(10) . time() . "." . $file->getClientOriginalExtension();
        $data_order = UnitFile::orderByDesc('order')->limit('1')->first();
        $data = Unit::find($r->unitID);
        if (Session::get('level') == 3 && Session::get('userID') == $data['created_by']) {
            Storage::disk('unit')->put($filename, File::get($file));

            $data = new UnitFile();
            $data->image = $filename;
            $data->unitID = $r->unitID;
            $data->order = $data_order['order'] ? (int)$data_order->order + 1 : 1;
            $data->save();
            $unit = Unit::find($r->unitID);
            $this->log(" Tambah foto unit <b>$unit[nama]</b>");
        } else {
            return " Hanya Super Admin dan Pembuat yang boleh mengedit Unit ini";
        }
    }

    function edit_order_unit_file(Request $r)
    {
        $data = explode(',', $r->order);
        $dataunit = UnitFile::find(explode('-', $data[0])[1]);
        $cekunit = Unit::find($dataunit['unitID']);
        if (Session::get('level') == 3 || Session::get('userID') == $cekunit['created_by']) {
            $exp = explode('-', $data[0]);
            $unit = UnitFile::find($exp[1]);
            $this->log(" update order unit <b>$unit[nama]</b> ");
            for ($x = 0; $x < count($data); $x++) {
                $exp = explode('-', $data[$x]);
                $unitfile = UnitFile::find($exp[1]);
                $unitfile->order = $exp[0];
                $unitfile->save();
            }
        } else {
            return " Hanya Super Admin dan Pembuat yang boleh mengedit Unit ini";
        }
    }

    function tambah_lokasiunit(Request $r)
    {
        if (Session::get('level') == 3) {
            LokasiUnit::create($r->all());
        } else {
            return "Anda tidak memiliki hakakses untuk mengatur lokasi unit";
        }
    }

    function edit_lokasiunit(Request $r)
    {
        if (Session::get('level') == 3) {
            $data = LokasiUnit::find($r->id);
            $data->lokasi = $r->lokasi;
            $data->save();
        } else {
            return "Anda tidak memiliki hakakses untuk mengatur lokasi unit";
        }
    }

    function tambah_message(Request $r)
    {
        foreach ($r->marketing as $data) {
            $req = $r->all();
            $req['created_by'] = Session::get('userID');
            $req['marketing'] = $data;
            $req['push_notif'] = empty($r->push_notif) ? 0 : 1;
            if ($req['push_notif']) {
                $devicetoken = Token::where('user', $data)->first()['devicetoken'];
                $this->push_notification($r->pesan, $r->judul,[
                    "action"=>"open_inbox",
                ], $devicetoken);
            }
            Message::create($req);
            $user = User::find($data)['name'];
            $this->log(" send message to <b>$user</b> (marketing) : <b>$r->judul</b>");
        }
    }

    function edit_message(Request $r)
    {
        $req = $r->all();
        unset($req['id']);
        Message::find($r->id)->update($req);
        $this->log(" send message to <b>$r->marketing</b> (marketing) : <b>$r->judul</b>");
    }

    function trackmarketing(Request $r)
    {
        $explode = explode(',', $r->marketing);
        $data = User::where('id', $explode[0]);
        for ($x = 1; $x < count($explode); $x++) {
            $data->orWhere('id', $explode[$x]);
        }
        $data_marketing = $data->get();
        $now = Carbon::now();
        foreach ($data_marketing as $key => $item) {
            $data_marketing[$key]['last_updated'] = $item['updated_at']->diff($now)->days < 7 ? $item['updated_at']->diffForHumans() : $item['updated_at']->format('D, d M Y H:i');
        }
        return response()->json($data_marketing);
    }

    function proceedsales(Request $r)
    {

        $sale = Sale::where('sales_id', $r->id)->first();
        $user = $sale['created_by'];
//
//        $this->sendsms($sale['nohp'],$pesan);
        switch ($r->status) {
            case 1:
                $pesan = "Hi, $sale[nama], jadwal wawancara : $r->tanggal pukul $r->waktu di $r->tempat info lebih lanjut : $r->nohp";
                $this->sendsms($sale['nohp'],$pesan);
                break;
            case 2:
                $pesan = "Hi, $sale[nama], jadwal akad kredit : $r->tanggal pukul $r->waktu di $r->tempat info lebih lanjut : $r->nohp";
                $this->sendsms($sale['nohp'],$pesan);
                break;
            case 3:
                break;
            case 4:
                $message = new Message();
                $message->marketing = $user;
                $message->judul = "Sale anda di tunda";
                $message->pesan = "Sale anda telah di tunda oleh " . Session::get('users');
                $message->push_notif = 1;
                $message->created_by = Session::get('userID');
                $message->save();
                $devicetoken = Token::where('user', $user)->first()['devicetoken'];
                $this->push_notification("Sale anda telah di tunda oleh " . Session::get('users'), 'Sale anda di tunda',[
                    "action"=>"open_inbox"
                ], $devicetoken);
                break;
            case 5:
                $message = new Message();
                $message->marketing = $user;
                $message->judul = "Sale anda dibatalkan";
                $message->pesan = "Sale anda telah dibatalkan oleh " . Session::get('users');
                $message->push_notif = 1;
                $message->created_by = Session::get('userID');
                $message->save();
                $devicetoken = Token::where('user', $user)->first()['devicetoken'];
                $this->push_notification("Sale anda telah dibatalkan oleh " . Session::get('users'), 'Sale anda dibatalkan',[
                    "action"=>"open_inbox"
                ], $devicetoken);
                break;
        }

        Sale::where('sales_id', $r->id)->update([
            "status" => $r->status,
        ]);
        $status = '';
        switch ($r->status) {
            case 0:
                $status = '"On progress"';
                break;
            case 1:
                $status = '"Wawancara"';
                break;
            case 2:
                $status = '"Akad"';
                break;
            case 3:
                $status = '"Selesai"';
                break;
            case 4:
                $status = '"Tunda"';
                break;
            case 5:
                $status = '"Batal"';
                break;
        }
        $data =  Sale::where('sales_id', $r->id)->first();
        $this->log(" change status unit to $status : <b>$data[nama]</b>");
    }
    function clearlog(){
        Logging::truncate();
    }
}
