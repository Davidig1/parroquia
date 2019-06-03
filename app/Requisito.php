<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requisito extends Model
{
    protected $fillable = ['userin_id', 'sacramento', 'cno', 'cnf', 'fca', 'cbauo', 'cbauf', 'ccomo', 'ccomf', 'fcp', 'cpa'];

    public function userins(){
    	return $this->belongsTo('App\Userin');
    }
}
