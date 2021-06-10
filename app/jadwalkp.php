<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwalkp extends Model
{
    protected $table='jadwal_kp';
    protected $fillable=['tgl_mulai','tgl_selesai'];
}
