<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class auth extends Controller
{
    function login(Request $r){
        $data = Admin::where('username',$r->username)->first();
        if($data && \Hash::check($r->password,$data->password)){
            \Session::put('users',$data->name);
            \Session::put('userID',$data->id);
            \Session::put('level',(int)$data->level);
            \Session::put('upline',(int)$data->level == 3 ? "developer :)" : Admin::find($data->created_by)['name']);
            Log::info(date('D, d M Y H:i:s',strtotime(Carbon::now()->toDateTimeString()))." $data->name login");
            return null;
        }else{
            return "Username atau Password Salah";
        }
    }
    function logout(){
        \Session::forget('users');
        \Session::forget('level');
        \Session::forget('userID');
        \Session::forget('upline');
        return redirect('/');
    }
    function forgotpassword(Request $r){
        $data = Admin::where('email',$r->email)->first();
        if($data) {
            $token = bcrypt(Str::random(rand(10,100)).time());
            DB::table('users')->where('email',$r->email)->update([
                "token"=>$token
            ]);
            Mail::send(['html' => 'emails.konfemail'], [
                "data"=>$data,
                "token"=>$token
            ],function($message) use ($r) {
                $message->from('no-reply@keraton.net');
                $message->to($r->email)->subject('Verifikasi Email');
            });
            return null;
        }else{
            return "Email tidak di temukan";
        }
    }
    function reset_password(Request $r){
        $data = Admin::find($r->userID);
        if($data && \Hash::check($r->oldpassword,$data->password)){
            $data->update([
                "password"=>bcrypt($r->password)
            ]);
        }else{
            return "Password lama anda salah";
        }
    }

}