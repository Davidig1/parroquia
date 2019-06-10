<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matrimonio extends Model
{
    protected $fillable = ['novio_id', 'novia_id','fxno', 'fxna', 'fcnno', 'fcnna', 'focino', 'focina', 'cconno', 'cconna', 'cbano', 'cbana', 'cmc', 'pm', 'tfcino', 'tfcina', 'pfcino', 'pfcina'];

    public function userins(){
    	return $this->belongsTo('App\Userin');
    }
}
