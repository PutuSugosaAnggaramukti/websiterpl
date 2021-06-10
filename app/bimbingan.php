<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bimbingan extends Model
{
    protected $table='bimbingan';
    protected $fillable=['nim','nama','semester'];
}
