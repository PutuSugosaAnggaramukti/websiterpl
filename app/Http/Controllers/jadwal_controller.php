<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal;
class jadwal_controller extends Controller
{
    public function index(){
        $data_jadwal = jadwal::all();
        return view('koordinator.jadwal',compact('data_jadwal'));
    }

    public function tambah_jadwal(Request $request){
        \App\jadwal::create($request->all());
        return redirect('jadwal');
    }

    public function deleteujian($id){
        $data_jadwal = jadwal::find($id);
        $data_jadwal->delete();
        return redirect()->back();
    }

}
