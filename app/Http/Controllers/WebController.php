<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function welcome(){
    	return view('web.welcome');
    }
    public function quienessomos(){
    	return view ('web.quienessomos');
    }
    public function eventos(){
    	return view ('web.eventos');
    }
    public function bautizo(){
    	return view ('web.bautizo');
    }
    public function catequesis(){
    	return view ('web.catequesis');
    }
    public function comunion(){
    	return view ('web.comunion');
    }
    public function confirmacion(){
    	return view ('web.confirmacion');
    }
    public function matrimonio(){
    	return view ('web.matrimonio');
    }
    public function contactenos(){
    	return view ('web.contactenos');
    }
    public function sermones(){
    	return view ('web.sermones');
    }


}
