<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Userin;
use App\Requisito;

class UserinController extends Controller
{
    public function crearcom(Request $request){
    	$us = Userin::create($request->all());
    	$i = $us->id;
    	Requisito::create([
    		'userin_id' => $i,
    		'sacramento' => $request['sacramento'],
    		'cno' => $request['cno'],
    		'cnf' => $request['cnf'],
    		'cbauo' => $request['cbauo'],
    		'cbauf' => $request['cbauf'],
    		'fca' => $request['fca'],
    		'fcp' => $request['fcp'],
    		'cpa' => $request['cpa'],
    	]);
    	return back()->with('flash', "Se ha registrado correctamente");
    }


    public function crearbau(Request $request){
    	$us = Userin::create($request->all());
    	$i = $us->id;
    	Requisito::create([
    		'userin_id' => $i,
    		'sacramento' => $request['sacramento'],
    		'cno' => $request['cno'],
    		'cnf' => $request['cnf'],
    		'fca' => $request['fca'],
    		'fcp' => $request['fcp'],
    		'cpa' => $request['cpa'],
    	]);
    	return back()->with('flash', "Se ha registrado correctamente");
    }

    public function crearcat(Request $request){
    	$us = Userin::create($request->all());
    	$i = $us->id;
    	Requisito::create([
    		'userin_id' => $i,
    		'sacramento' => $request['sacramento'],
    		'cno' => $request['cno'],
    		'cnf' => $request['cnf'],
    		'fca' => $request['fca'],
    		'cbauo' => $request['cbauo'],
    		'cbauf' => $request['cbauf'],
    		'fcp' => $request['fcp'],
    		'cpa' => $request['cpa'],
    	]);
    	return back()->with('flash', "Se ha registrado correctamente");
    }


    public function crearcon(Request $request){
    	$us = Userin::create($request->all());
    	$i = $us->id;
    	Requisito::create([
    		'userin_id' => $i,
    		'sacramento' => $request['sacramento'],
    		'cno' => $request['cno'],
    		'cnf' => $request['cnf'],
    		'fca' => $request['fca'],
    		'cbauo' => $request['cbauo'],
    		'cbauf' => $request['cbauf'],
    		'ccomo' => $request['ccomo'],
    		'ccomf' => $request['ccomf'],
    		'fcp' => $request['fcp'],
    		'cpa' => $request['cpa'],
    	]);
    	return back()->with('flash', "Se ha registrado correctamente");
    }
}
