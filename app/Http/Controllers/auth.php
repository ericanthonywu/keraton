<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Carbon\Carbon;
use App\Models\Logging;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Session;

class auth extends Controller
{
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

    function login(Request $r){
        $data = Admin::where('username',$r->username)->first();
        if($data && \Hash::check($r->password,$data->password)){
            \Session::put('users',$data->name);
            \Session::put('userID',$data->id);
            \Session::put('level',(int)$data->level);
            \Session::put('upline',(int)$data->level == 3 ? "developer :)" : Admin::find($data->created_by)['name']);
            $this->log(" Logged in");
            return null;
        }else{
            return "Username atau Password Salah";
        }
    }
    function logout(){
        if(Session::get('users') && Session::get('level')) {
            $this->log(" Logged out");
        }
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