<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Admin;
use App\Models\Sale;
use App\Models\Unit;
use App\Models\UnitFile;
use App\Models\LokasiUnit;
use App\Models\User;
use App\Models\Message;
use App\Models\Logging;
use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Traits\Date;
use Illuminate\Http\Request;

class page extends Controller
{
    function welcome(){
        if(\Session::get('users') && \Session::get('level')) {
            return redirect('/dashboard');
        }else{
            \Session::forget('users');
            \Session::forget('level');
            \Session::forget('userID');
            \Session::forget('upline');
            return view('welcome');
        }
    }
    function admin(){
        if(\Session::get('level') >= 3){
            return view('page.admin.admin.index');
        }else{
            return redirect()->back();
        }
    }
    function manager(){
        if(\Session::get('level') >= 2){
            return view('page.admin.manager.index',[
                "admin"=>Admin::where('level',2)->get()
            ]);
        }else{
            return redirect()->back();
        }
    }
    function marketing(){
        if(\Session::get('level') >= 1){
            return view('page.admin.marketing.index',[
                "manager"=>Admin::where('level',1)->get()
            ]);
        }else{
            return redirect()->back();
        }
    }
    function banner(){
        $data = Banner::orderBy('order','asc');
        $empty = [
            "data"=>"kosong"
        ];
        return view('page.managebanner.index',[
            "data"=> $data->exists() ? $data->get() : $empty,
        ]);
    }
    function editbanner($id){
        $data = Banner::find($id);
        if($data) {
            return view('page.managebanner.edit', [
                "data" => $data,
                "admin"=>Admin::all()
            ]);
        }else{
            return redirect()->back();
        }
    }
    function tambah_unit(){
        return view('page.manageunit.tambah',[
            "lokasi"=>LokasiUnit::all(),
        ]);
    }
    function edit_unit($id){
        $data = Unit::find($id);
        if(\Session::get('level') == 3 || \Session::get('userID') == $data['created_by'] && $data){
            return view('page.manageunit.edit', [
                "data" => $data,
                "gambar"=> $data['id'],
                "admin"=>Admin::all(),
                "lokasi"=>LokasiUnit::all(),
            ]);
        }else{
            return redirect()->back();
        }
    }
    function tambah_message(){
        if(\Session::get('level') == 3){
            $data = User::all();
        }
        else if(\Session::get('level') == 2){
            $data_marketing = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = User::where('created_by',\Session::get('userID'));
            foreach ($data_marketing as $k=>$v) {
                $data->orWhere('created_by', $v['id']);
            }
            $data = $data->get();

        } else {
            $data = User::where([
                "created_by" => \Session::get('userID'),
            ])->get();
        }
        return view('page.message.tambah',[
            "marketing"=>$data
        ]);
    }
    function edit_message($id){
        $data = Message::find($id);
        if($data) {
            return view('page.message.edit', [
                "data"=>$data,
                "marketing"=>User::find($data['marketing'])['name']
            ]);
        }else{
            return redirect()->back();
        }
    }
    function trackmarketing(){
        if(\Session::get('level') == 3){
            $data = User::all();
        }
        else if(\Session::get('level') == 2){
            $data_marketing = Admin::where([
                "level" => 1,
                "created_by" => \Session::get('userID'),
            ])->get();
            $data = User::where('created_by',\Session::get('userID'));
            foreach ($data_marketing as $k=>$v) {
                $data->orWhere('created_by', $v['id']);
            }
            $data = $data->get();

        } else {
            $data = User::where([
                "created_by" => \Session::get('userID'),
            ])->get();
        }
        return view('page.admin.marketing.trackmarketing',[
            "marketing"=>$data
        ]);
    }
    function pdf($data){
        $data_sale = Sale::where('pdf_name',$data)->first();
        $data_unit = Unit::find($data_sale['unit']);
        $data_sale['namaunit'] = $data_unit['nama'];
        $data_sale['lokasiunit'] = LokasiUnit::find($data_unit['lokasi_fix'])['lokasi'].", $data_unit[lokasi_text]";
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadView('pdf.tandaterima',$data_sale);
        return $pdf->download('invoice.pdf');
    }
}
