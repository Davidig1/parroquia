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
        
        Matrimonio::create($request->all());
        return back()->with('flash', "Se ha registrado correctamente");
    }


    public function lista(){
        $ba = Requisito::where('sacramento', 'bautismo')->with('userins')->get();
        $com = Requisito::where('sacramento', 'comunion')->with('userins')->get();
        $con = Requisito::where('sacramento', 'confirmacion')->with('userins')->get();
        $cat = Requisito::where('sacramento', 'catequesis')->with('userins')->get();
        $mat = Matrimonio::all();
        //dd($mat);
        return view('users.listas.lista', compact('ba','com','con','cat','mat'));
    }

    public function listabau(){
        $sac = "BAUTIZO";
        $user = Requisito::where('sacramento', 'bautismo')->with('userins')->get();
        $view = \View::make('users.listas.reportelista', compact('user', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }

    public function listacon(){
        $sac = "CONFIRMACION";
        $user = Requisito::where('sacramento', 'confirmacion')->with('userins')->get();
        $view = \View::make('users.listas.reportelista', compact('user', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }

    public function listacom(){
        $sac = "COMUNION";
        $user = Requisito::where('sacramento', 'comunion')->with('userins')->get();
        $view = \View::make('users.listas.reportelista', compact('user', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }

    public function listacat(){
        $sac = "CATEQUESIS";
        $user = Requisito::where('sacramento', 'catequesis')->with('userins')->get();
        $view = \View::make('users.listas.reportelista', compact('user', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }


    public function listamat(){
        $sac = "MATRIMONIO";
        $user = Matrimonio::all();
        $view = \View::make('users.listas.reportelista', compact('user', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('lista.pdf');
    }

    public function reportemat(Matrimonio $m){
        //dd($m);
        $nno = mb_strtoupper($m->nombreno);
        $apno = mb_strtoupper($m->appno);
        $nna = mb_strtoupper($m->nombrena);
        $apna = mb_strtoupper($m->appna);
        //dd($nno);
        $view = \View::make('users.certificados.certificadomat', compact('nna', 'nno', 'apno', 'apna'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('matrimonio.pdf');
    }

    public function reportebau(Userin $a){
        //dd($a);
        $no = mb_strtoupper($a->nombre);
        $ap = mb_strtoupper($a->app);
        $am = mb_strtoupper($a->apm);
        //dd($nno);
        $view = \View::make('users.certificados.certificado', compact('no', 'ap', 'am'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('bautizo.pdf');
    }

    public function reportecon(Userin $a){
        //dd($con);
        $sac = "CONFIRMACION";
        $no = mb_strtoupper($a->nombre);
        $ap = mb_strtoupper($a->app);
        $am = mb_strtoupper($a->apm);
        //dd($nno);
        $view = \View::make('users.certificados.certificado', compact('no', 'ap', 'am', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('bautizo.pdf');
    }

    public function reportecom(Userin $a){
        //dd($con);
        $sac = "COMUNION";
        $no = mb_strtoupper($a->nombre);
        $ap = mb_strtoupper($a->app);
        $am = mb_strtoupper($a->apm);
        //dd($nno);
        $view = \View::make('users.certificados.certificado', compact('no', 'ap', 'am', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('bautizo.pdf');
    }

    public function reportecat(Userin $a){
        //dd($con);
        $sac = "CATEQUESIS";
        $no = mb_strtoupper($a->nombre);
        $ap = mb_strtoupper($a->app);
        $am = mb_strtoupper($a->apm);
        //dd($nno);
        $view = \View::make('users.certificados.certificado', compact('no', 'ap', 'am', 'sac'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        $pdf->setPaper('letter', 'landscape');
        return $pdf->download('bautizo.pdf');
    }
}
