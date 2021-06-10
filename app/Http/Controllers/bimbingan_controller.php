<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bimbingan;

class bimbingan_controller extends Controller
{
    public function index(){
        $data_bimbingan = bimbingan::all();
        return view('koordinator.bimbingan',compact('data_bimbingan'));
    }

    public function tambah_bimbingan(Request $request){
        \App\bimbingan::create($request->all());
        return redirect('bimbingan');
    }

}
