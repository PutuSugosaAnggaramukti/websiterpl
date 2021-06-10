<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class koordinator extends Model
{
    
    use Notifiable;
    protected $table = 'koordinator';
    protected $fillable = ['nik','name','email','google_id'];
    
    public function setAttribute($key, $value)
    {
        $isRememberTokenAttribute = $key == $this->getRememberTokenName();
        if (!$isRememberTokenAttribute)
        {
        parent::setAttribute($key, $value);
        }
    }
    public function dos_pra_kp(){
        return $this->belongsTo('App\pra_kp');
    }
    public function dos_kp(){
        return $this->belongTo('App\kp');
    }
}
