<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrimonio extends Model
{
    protected $fillable = ['nombreno', 'nombrena', 'appno', 'appna', 'apmno','apmna' , 'cino', 'cina','fxno', 'fxna', 'fcnno', 'fcnna', 'focino', 'focina', 'cconno', 'cconna', 'cbano', 'cbana', 'cmc', 'pm', 'tfcino', 'tfcina', 'pfcino', 'pfcina', 'emailno', 'emailna', 'fxm'];

    /*public function userins(){
    	return $this->belongsToMany(Userin::class, 'matrimonios', 'id', 'id')->withPivot('novio_id', 'novia_id');
    }*/
}
