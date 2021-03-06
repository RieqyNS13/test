<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Magang extends Model
{
    public function surats(){
    	return $this->belongsToMany('App\Surat','magang_has_surats', 'magang_id', 'surat_id');
    }
    public function users(){
    	return $this->belongsTo('App\User','user_id');
    }
    public function konstruktor(){
    	return $this->hasOne('App\Konstruktor');
    }
    public function pembimbing_asal(){
    	return $this->hasOne('App\PembimbingAsal');
    }
     public function penilaian(){
        return $this->hasMany('App\Penilaian');
    }
}
