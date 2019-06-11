<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Event extends Model
{

 	use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = ['event_name','start_date','end_date','event_color','event_des','event_price'];
}
