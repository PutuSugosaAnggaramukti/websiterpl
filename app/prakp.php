<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prakp extends Model
{
    protected $table = 'pra_kp';
    protected $fillable = ['nim','dosen_id','lembaga','alamat','pimpinan','no_telp',
    'fax','spek','tools','dokumen','status_pkp'];
}
