<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jadwal; 
use App\bimbingan;

class dosen_controller extends Controller
{
    public function index(){
        $data_jadwal = jadwal::all();
        return view('dosen.jadwalujian',compact('data_jadwal'));
    }
    
    public function jadwalbimbingan(){
        $data_bimbingan = bimbingan::all();
        return view('dosen.lihatbimbingan',compact('data_bimbingan'));
    }
}
