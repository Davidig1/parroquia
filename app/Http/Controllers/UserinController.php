<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Userin;
use App\Requisito;
use App\Matrimonio;
use PDF;

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

    public function crearmat(Request $request){
        $no = Userin::create([
            'cn' => $request['cnno'],
            'nombre' => $request['nombreno'],
            'app' => $request['appno'],
            'apm' => $request['apmno'],
            'fxn' => $request['fxno'],
            ]);
        $na = Userin::create([
            'cn' => $request['cnna'],
            'nombre' => $request['nombrena'],
            'app' => $request['appna'],
            'apm' => $request['apmna'],
            'fxn' => $request['fxna'],
            ]);
        $idno = $no->id;
        $idna = $na->id;
        Matrimonio::create([
            'novio_id' => $idno,
            'novia_id' => $idna,
            'fcnno' => $request['fcnno'],
            'fcnna' => $request['fcnna'],
            'focino' => $request['focino'],
            'focina' => $request['focina'],
            'cconno' => $request['cconno'],
            'cconna' => $request['cconna'],
            'cbano' => $request['cbano'],
            'cbana' => $request['cbana'],
            'cmc' => $request['cmc'],
            'pm' => $request['pm'],
            'tfcino' => $request['tfcino'],
            'tfcina' => $request['tfcina'],
            'pfcino' => $request['pfcino'],
            'pfcina' => $request['pfcina'],
        ]);
        return back()->with('flash', "Se ha registrado correctamente");
    }


    public function lista(){
        $user = Userin::with('requisitos')->get();
        $ba = Requisito::where('sacramento', 'bautismo')->with('userins')->get();
        $com = Requisito::where('sacramento', 'comunion')->with('userins')->get();
        $con = Requisito::where('sacramento', 'confirmacion')->with('userins')->get();
        $cat = Requisito::where('sacramento', 'catequesis')->with('userins')->get();
        $ma = Matrimonio::with('userins')->get();
        //dd($ma);
        return view('users.listas.lista', compact('ba','com','con','cat'));
    }

    Public function listareporte(){
        $user = Requisito::where('sacramento', 'bautismo')->with('userins')->get();
        $view = \View::make('users.listas.reportelista', compact('user'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }
}
