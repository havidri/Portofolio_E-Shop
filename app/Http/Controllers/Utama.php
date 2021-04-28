<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class Utama extends Controller
{
    public function index(){
        $product = DB::table('tbl_Product')->get();
        return view('Utama', ['product' => $product]);
    }

    public function store(Request $request){
        $this->validate($request,
        ['file' => 'required|max:2048']
        );
        $file = $request->file('file');
        $image_name = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'data_file';
        if($file->move($tujuan_upload,$image_name)){
            $data = Product::create([
                'product_name' => $request->product_name,
                'price' => $request->price,
                'image' => $image_name
            ]);
            $res['message'] = 'Success';
            $res['values'] = $data;
            return response($res);
        }
    }
}
