<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Calendar;
use App\Event;
use Validator;
use PDF;
use Carbon\Carbon;
use Response;
use DB;
//use Barryvdh\DomPDF\Facade;
class EventController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->event_name,
                    false,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date),
                    //new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => $value->event_color,
	                    'url' => 'eventos/'.$value->id,
                                    'selectable'  => true,
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('events.index', compact('calendar', 'data'));
    }

    public function create(Request $request)
    {   
       //dd(request()->all());
      Event::create(Request()->all()); 
      return back();
    }

    public function delete(Event $event)
    {   
        $event = Event::find($event->id)->delete();
        return back();
    }

    public function report(request $request){
         $start = Carbon::createFromFormat('Y-m-d', $request->start_date_report);
         $end = Carbon::createFromFormat('Y-m-d', $request->end_date_report);

        // foreach ($events as $data) {
        //      $s = Carbon::createFromFormat('Y-m-d H:i:s', $data->start_date);
        //      $e = Carbon::createFromFormat('Y-m-d H:i:s', $data->end_date);
        //      if ( ($s >= $start) && ($e <= $end) ) {
                 
        //         echo $data;

        //      }

        //  }


        $events = DB::table('events')->whereBetween('start_date',[$start,$end])->get();

        $view = \View::make('events.ReportEvent', compact('events'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->download('reporte');
    }
}

