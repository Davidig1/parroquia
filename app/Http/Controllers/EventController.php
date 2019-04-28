<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Calendar;
use App\Event;
use Validator;
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
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
	                    'color' => $value->event_color,
	                    'url' => 'eventos/'.$value->id,
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        return view('events.index', compact('calendar'));
    }

    public function create(Request $request)
    {
         event::create(Request()->all());
         return back();
    }
}
