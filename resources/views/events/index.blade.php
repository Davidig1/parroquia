@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

@endsection


@section('content')

    <h1 class="h3 mb-2 text-gray-800 container">Eventos</h1><br>
    <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Crear nuevo Evento</h6>
                </div>
                <div class="card-body">
                    
                    <form class="form-group" method="post" action="{{ route('events.create') }}">
                    {{csrf_field()}}
                      <div class="form-row">
                        <div class="col-5">
                          <input type="text" class="form-control" placeholder="Titulo del evento" required name="event_name">
                        </div>
                        <div class="col-2">
                          <input type="date" class="form-control" required name="start_date">
                        </div>
                        <div class="col-2">
                          <input type="date" class="form-control" required name="end_date" >
                        </div>
                        <div class="col">
                          <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </div>
                    </form>
                </div>
              </div>



    <div class="card shadow mb-4">
        
            <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Calendario</h6>
            </div>
                <div class="card-body">
                    
                    {!! $calendar->calendar() !!}
                    <br><br>
                </div>
            
    </div>    

@endsection

@section('script')
<script src="http://code.jquery.com/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
 
{!! $calendar->script() !!}
@endsection