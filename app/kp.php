<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kp extends Model
{
    protected $table = 'kp';
    protected $fillable = ['semester','tahun','judul_kp','tools','nim',
    'id_jadwal','lembaga','alamat','pimpinan','no_telp','fax','spek','dokumen','status_kp',
    'status_ujian','dosen_id'];
}
