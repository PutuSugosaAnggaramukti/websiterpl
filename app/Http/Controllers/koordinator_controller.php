<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\suratkp;

class koordinator_controller extends Controller
{
    public function index(){
        $data_suratkp = suratkp::all();
        return view('koordinator.index',compact('data_suratkp'));
    }

    public function vedit($id){
        $koor_suratkp = suratkp::find($id);
        $data = [
            'title'=>'suratkp',
            'koor_suratkp'=>$koor_suratkp
        ];
        return view('koordinator.validasi',$data);
    }

    public function viewdatakp($id,Request $request){
        $koor_suratkp = suratkp::find($id);
        $koor_suratkp->nim = $request->input('nim');
        $koor_suratkp->lembaga = $request->input('lembaga');
        $koor_suratkp->alamat = $request->input('alamat');
        $koor_suratkp->pimpinan = $request->input('pimpinan');
        $koor_suratkp->no_telp = $request->input('no_telp');
        $koor_suratkp->fax = $request->input('fax');
        $koor_suratkp->spek = $request->input('spek');
        $koor_suratkp->tools = $request->input('tools');
        $koor_suratkp->dokumen = $request->input('dokumen');
        $koor_suratkp->status_skp = $request->input('status_skp');
        $koor_suratkp->save();
        return redirect()->route('koordinator');
    }

}

