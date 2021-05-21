<?php

namespace App\Http\Controllers;

use Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Order extends Controller
{
    public function Order(Request $request){
        DB::table('tbl_cart')->insert([
            'id_user' => Session::get('id_user'),
            'id_product' => $request->id_product, 
            'total' => $request->total
        ]);

        return redirect('/');
    }

    public function Cart(){
        $cart = DB::table('cart')->get();
        return view('cart', ["cart" => $cart]);
    }

    public function Checkout(){
        
    }
}