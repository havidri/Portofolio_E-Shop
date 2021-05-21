<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Login extends Controller
{
    public function index(){
        return view('Login');
    }

    public function Register(Request $request) {
        DB::table('tbl_user')->insert([
            'username' => $request->name, 
            'email' => $request->email,
            'password' => $request->password

        ]);

        return redirect('/Login');
    }

    public function Login(Request $request) {
        $user = DB::table('tbl_user')->where('email', $request->email)->first();
        if($user->password == $request->password){
            Session::put('id_user', $user->id);
            echo 'Data disimpan dengan session id = '.$request->session()->get('id');
            return redirect('/');

        } else {
            echo 'Email atau Password tidak sesuai';
        }
    }

    public function Singout(){
        Session::forget('id_user');
        return redirect('/');
    }


}
