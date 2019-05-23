<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Banner;
use App\Models\BannerParticipant;
use App\Models\Sale;
use App\Models\Unit;
use App\Models\UnitFile;
use App\Models\User;
use App\Models\Message;
use App\Models\LokasiUnit;
use App\Models\Logging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jsontable extends Controller
{
    function admin()
    {
        $data = Admin::where([
            "level" => 2,
        ])->get();
        foreach ($data as $k => $datum) {
            $data[$k]['delete'] = \Session::get('level') == 3 ? true : false;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function manager()
    {
        if (\Session::get('level') == 3) {
            $data = Admin::where([
                "level" => 1,
            ])->get();
        } else {
            $data = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
        }
        foreach ($data as $k => $v) {
            $upline = \Session::get('level') == 3 ? $v['created_by'] : \Session::get('userID');
            $data[$k]['upline'] = Admin::find($upline)['name'];
            $data[$k]['delete'] = \Session::get('level') == 3 ? true : false;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function marketing()
    {
        if (\Session::get('level') == 3) {
            $data = User::all();
            foreach ($data as $k => $v) {
                $data[$k]['upline'] = Admin::find($v['created_by'])['name'];
                $data[$k]['delete'] = true;
            }
        } else if (\Session::get('level') == 2) {
            $data_manager = Admin::where([
                "level" => 2,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data_marketing = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = User::where('created_by', \Session::get('userID'));
            foreach ($data_manager as $k => $v) {
                $data->orWhere('created_by', $v['id']);
            }
            foreach ($data_marketing as $k => $v) {
                $data->orWhere('created_by', $v['id']);
            }

            $data = $data->get();
            foreach ($data as $k => $v) {
                $data[$k]['upline'] = Admin::find($v['created_by'])['name'];
                $data[$k]['delete'] = false;
            }

        } else {
            $data = User::where([
                "created_by" => \Session::get('userID'),
            ])->get();
            foreach ($data as $k => $v) {
                $data[$k]['upline'] = Admin::find(\Session::get('userID'))['name'];
                $data[$k]['delete'] = false;
            }
        }
        return response()->json([
            "data" => $data,
        ]);
    }

    function banner()
    {
        $data = Banner::orderBy('order')->get();
        $no = 1;
        foreach ($data as $k => $v) {
            $data[$k]['no'] = $no;
            $data[$k]['DT_RowId'] = "row-" . $v['id'];
            $data[$k]['userkonfirmasi'] = count(BannerParticipant::whereBanner($v['id'])->get());
            $data[$k]['delete'] = \Session::get('level') == 3 ? true : false;
            $no++;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function unit()
    {
        if (\Session::get('level') == 3) {
            $data_unit = Unit::all();
        } else if (\Session::get('level') == 2) {
            $data_manager = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = Unit::where('created_by', \Session::get('userID'));
            foreach ($data_manager as $k => $v) {
                $data->orWhere('created_by', $v['id']);
            }
            $data->orWhere('created_by', 1);
            $data_unit = $data->get();
        } else {
            $data = Unit::where('created_by', \Session::get('userID'));
            $admin = Admin::find(\Session::get('userID'))['created_by'];
            $data->orWhere('created_by', $admin);
            $data->orWhere('created_by', 1);
            $data_unit = $data->get();
        }
        $no = 1;
        foreach ($data_unit as $k => $v) {
            $data_unit[$k]['no'] = $no;
            $data_unit[$k]['lokasi'] = LokasiUnit::find($v['lokasi_fix'])['lokasi'] . ", " . $v['lokasi_text'];
            $data_unit[$k]['created_by'] = Admin::find($v['created_by'])['name'];
            $data_unit[$k]['date_created'] = $v['created_at']->format('D, d M Y H:i');
            $data_unit[$k]['delete'] = \Session::get('level') == 3 ? true : false;
            $data_unit[$k]['edit'] = \Session::get('level') == 3 || \Session::get('users') == $v['created_by'] ? true : false;
            $no++;
        }
        return response()->json([
            "data" => $data_unit
        ]);
    }

    function unit_file($id)
    {
        $data = UnitFile::where('unitID', $id)->orderBy('order')->get();
        $no = 1;
        foreach ($data as $k => $v) {
            $data[$k]['no'] = $no;
            $data[$k]['DT_RowId'] = "row-" . $v['id'];
            $no++;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function unit_deskripsi(Request $r)
    {
        return Unit::find($r->id)['description'];
    }

    function showedit(Request $r)
    {
        $data = DB::table($r->table)->where('id', $r->id)->get();
        return response()->json($data);
    }

    function lokasiunit()
    {
        $data = LokasiUnit::all();
        foreach ($data as $k => $v) {
            $data[$k]['delete'] = \Session::get('level') == 3 ? true : false;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function detailuserbanner($id)
    {
        $data = BannerParticipant::where('banner', $id)->get();
        $no = 1;
        foreach ($data as $k => $v) {
            $data[$k]['no'] = $no;
            $data[$k]['sales'] = User::find($v['user'])['name'];
            $data[$k]['delete'] = \Session::get('level') == 3 ? true : false;
            $data[$k]['date_created'] = $v['created_at']->format('D, d M Y H:i');
            $no++;
        }
        return response()->json([
            "data" => $data
        ]);
    }

    function sale()
    {
        if (\Session::get('level') == 3) {
            $data_unit = Unit::all();
        } else if (\Session::get('level') == 2) {
            $data_manager = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = Unit::where('created_by', \Session::get('userID'));
            foreach ($data_manager as $k => $v) {
                $data->orWhere('created_by', $v['id']);
            }
            $data->orWhere('created_by', 1);
            $data_unit = $data->get();
        } else {
            $data = Unit::where('created_by', \Session::get('userID'));
            $admin = Admin::find(\Session::get('userID'))['created_by'];
            $data->orWhere('created_by', $admin);
            $data->orWhere('created_by', 1);
            $data_unit = $data->get();
        }
        $No = 1;
        $sale = Sale::where('unit', 0)->orderByDesc('sales_id');
        foreach ($data_unit as $k => $v) {
            $sale->orWhere('unit', $data_unit[$k]['id']);
        }
        $sale = $sale->get();
        foreach ($sale as $k => $v) {
            $sale[$k]['no'] = $No;
            $sale[$k]['nama_unit'] = Unit::find($v['unit'])['nama'];
            $sale[$k]['DT_RowId'] = "row-$v[sales_id]";
            $sale[$k]['tanggal_dibuat'] = $v['created_at']->format("D, d M Y H:i");
            $No++;
        }
        return response()->json([
            "data" => $sale
        ]);
    }

    function detailtotalsales(Request $r)
    {
        $data_sale = Sale::where('sales_id', $r->id)->first();
        $data_unit = Unit::find($data_sale['unit']);
        foreach ($data_unit as $data) {
            $data_unit['lokasi'] = LokasiUnit::find($data_unit['lokasi_fix'])['lokasi'] . ", " . $data_unit['lokasi_text'];
        }
        foreach ($data_sale as $data) {
            $data_sale['dibuat_oleh'] = User::find($data_sale['created_by'])['name'];
        }
        $data_foto_unit = UnitFile::where('unitID', $data_unit['id'])->get();
        return response()->json([
            $data_sale, $data_unit, $data_foto_unit
        ]);
    }

    function message()
    {
        if (\Session::get('level') == 3) {
            $data_message = Message::orderByDesc('id')->get();
        } else if (\Session::get('level') == 2) {
            $data_manager = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = Message::where('created_by', \Session::get('userID'))->orderByDesc('id');
            foreach ($data_manager as $k => $v) {
                $data->orWhere('created_by', $v['id']);
            }
            $data_message = $data->get();
        } else {
            $data = Message::where('created_by', \Session::get('userID'))->orderByDesc('id');;
            $admin = Admin::find(\Session::get('userID'))['created_by'];
            $data->orWhere('created_by', $admin);
            $data_message = $data->get();
        }
        $no = 1;
        foreach ($data_message as $key => $item) {
            $data_message[$key]['no'] = $no;
            $data_message[$key]['nama_marketing'] = User::find($item['marketing'])['name'];
            $data_message[$key]['date_created'] = $item['created_at']->format("D, d M Y  H:i");
            $data_message[$key]['delete'] = \Session::get('level') == 3 ? true : false;
            $data_message[$key]['edit'] = \Session::get('level') == 3 || \Session::get('userID') == $item['created_by'] ? true : false;
            $data_message[$key]['dibuat_oleh'] = Admin::find($item['created_by'])['name'];
            $no++;
        }
        return response()->json([
            "data" => $data_message
        ]);
    }

    function log(Request $r)
    {
        $data = $r->search ?
            Logging::orderByDesc('id')->limit($r->limit)->offset($r->offset)->whereRaw("match (activity) AGAINST ('$r->search*' IN BOOLEAN MODE)")->get()
            :
            Logging::orderByDesc('id')->limit($r->limit)->offset($r->offset)->get();
        $no = 1;
        foreach ($data as $k => $v) {
            $data[$k]['date_created'] = $v['created_at']->format('D, d M Y H:i');
            $data[$k]['no'] = $no;
            $no++;
        }
        return response()->json($data);
    }

    function totallog()
    {
        return Logging::all()->count();
    }
}
