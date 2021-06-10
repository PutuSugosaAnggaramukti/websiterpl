<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwalkp;

class jadwalkp_controller extends Controller
{
    public function index(){
        $data_jadwalkp = jadwalkp::all();
        return view('dosen.bataskp',compact('data_jadwalkp'));
    }

    public function tambah_jadwalkp(Request $request){
        \App\jadwalkp::create($request->all());
        return redirect('jadwalkp');
    }

    public function deleteujian($id){
        $data_jadwalkp = jadwalkp::find($id);
        $data_jadwalkp->delete();
        return redirect()->back();
    }
}
