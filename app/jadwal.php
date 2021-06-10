<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table='jadwal_ujian';
    protected $fillable=['tgl','jam','ruang','dosbing','dosen_penguji'];
}
