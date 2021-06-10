<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class suratkp extends Model
{
    protected $table = 'surat_kp';
    protected $fillable = ['nim','lembaga','alamat','pimpinan','no_telp',
    'fax','spek','tools','dokumen','status_skp'];
}
