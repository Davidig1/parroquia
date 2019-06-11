<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userin extends Model
{
    protected $fillable = ['cn', 'estado', 'nombre', 'app', 'apm', 'fxn', 'bau', 'com', 'con', 'cat'];

    public function requisitos(){
    	return $this->hasMany('App\Requisito');
    }

    public function matrimonios(){
    	return $this->hasMany('App\Matrimonio');
    }
}
