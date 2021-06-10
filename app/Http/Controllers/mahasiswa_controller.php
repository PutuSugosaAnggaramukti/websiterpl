<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kp;
use App\prakp;
use App\suratkp;
use App\jadwal;
use App\jadwalkp;

class mahasiswa_controller extends Controller
{
    public function kp(){
        $data_kp = kp::all();
        return view('mahasiswa.kp',compact('data_kp'));
    }

    public function pra_kp(){
        $data_pkp = prakp::all();
        return view('mahasiswa.prakp',compact('data_pkp'));
    }

    public function surat_ket(){
        $data_suratkp = suratkp::all();
        return view('mahasiswa.surat_keterangan',compact('data_suratkp'));
    }

    public function jadwal_ujian(){
        $ujian = jadwal::all();
        return view('mahasiswa.ujian',compact('ujian'));
    }

    public function jadwal_kp(){
        $data_jadwalkp = jadwalkp::all();
        return view('mahasiswa.cekjadwalkp',compact('data_jadwalkp'));
    }


    public function tambah(Request $request){
        \App\kp ::create($request->all());
        return redirect('kp')->with('sukses','Silakan melakukan pengecekan status pengajuan Anda secara mandiri !');
    }

    public function tambahprakp(Request $request){
        \App\prakp ::create($request->all());
        return redirect('prakp')->with('sukses','Silakan melakukan pengecekan status pengajuan Anda secara mandiri !');
    }

    public function tambahsuratkp(Request $request){
        \App\suratkp ::create($request->all());
        return redirect('surat_ket')->with('sukses','Silakan melakukan pengecekan status pengajuan Anda secara mandiri !');
    }

    public function findidkp($id){
        $data_kp = kp::find($id);
        $data = [
            'tittle' => 'kp',
            'data_kp'=> $data_kp
        ];
        return view('mahasiswa.editkp',$data);
    }

    public function editkp($id,Request $request){
        $data_kp = kp::find($id);
        $data_kp->semester = $request->input('semester');
        $data_kp->tahun = $request->input('tahun');
        $data_kp->judul_kp = $request->input('judul_kp');
        $data_kp->tools = $request->input('tools');
        $data_kp->nim = $request->input('nim');
        $data_kp->lembaga = $request->input('lembaga');
        $data_kp->alamat = $request->input('alamat');
        $data_kp->pimpinan = $request->input('pimpinan');
        $data_kp->no_telp = $request->input('no_telp');
        $data_kp->fax = $request->input('fax');
        $data_kp->spek = $request->input('spek');
        $data_kp->dokumen = $request->input('dokumen');
        $data_kp->status_kp = $request->input('status_kp');
        $data_kp->status_ujian = $request->input('status_ujian');
        $data_kp->save();
        return redirect()->route('indexkp');
    }

    public function deletekp($id_kp){
        $data_kp = kp::find($id_kp);
        $data_kp->delete();
        return redirect()->back();
    }
    
    public function findidpkp($id){
        $data_pkp = prakp::find($id);
        $data = [
            'tittle' => 'prakp',
            'data_pkp'=> $data_pkp
        ];
        return view('mahasiswa.editprakp',$data);
    }

    public function editprakp($id,Request $request){
        $data_pkp = prakp::find($id);
        $data_pkp->nim = $request->input('nim');
        $data_pkp->dosen_id = $request->input('dosen_id');
        $data_pkp->lembaga = $request->input('lembaga');
        $data_pkp->alamat = $request->input('alamat');
        $data_pkp->pimpinan = $request->input('pimpinan');
        $data_pkp->no_telp = $request->input('no_telp');
        $data_pkp->fax = $request->input('fax');
        $data_pkp->spek = $request->input('spek');
        $data_pkp->tools = $request->input('tools');
        $data_pkp->dokumen = $request->input('dokumen');
        $data_pkp->status_pkp = $request->input('status_pkp');
        $data_pkp->save();
        return redirect()->route('indexpkp');
    }

    public function deleteprakp($id){
        $data_pkp = prakp::find($id);
        $data_pkp->delete();
        return redirect()->back();
    }

    public function findidskp($id){
        $data_suratkp = suratkp::find($id);
        $data = [
            'tittle' => 'suratkp',
            'data_suratkp'=> $data_suratkp
        ];
        return view('mahasiswa.editsuratkp',$data);
    }

    public function editsuratkp($id,Request $request){
        $data = suratkp::find($id);
        $data->nim = $request->input('nim');
        $data->lembaga = $request->input('lembaga');
        $data->alamat = $request->input('alamat');
        $data->pimpinan = $request->input('pimpinan');
        $data->no_telp = $request->input('no_telp');
        $data->fax = $request->input('fax');
        $data->spek = $request->input('spek');
        $data->tools = $request->input('tools');
        $data->dokumen = $request->input('dokumen');
        $data->status_skp = $request->input('status_skp');
        $data->save();
        return redirect()->route('indexskp');
    }

    public function deletesuratkp($id){
        $data_suratkp = suratkp::find($id);
        $data_suratkp->delete();
        return redirect()->back();
    }


}
