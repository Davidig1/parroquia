@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{asset('css/jquery.minicolors.css')}}">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <!-- Bootstrap 3 -->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
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
                        <div class="col-4">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">Nombre del evento
                          </div>
                          <input type="text" class="form-control" placeholder="Ingrese el titulo del evento" required name="event_name">
                        </div>
                        <div class="col-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">Fecha de inicio
                          </div>
                          <input type="date" class="form-control" required name="start_date">
                        </div>
                        <div class="col-2">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">Fecha de fin
                          </div>
                          <input type="date" class="form-control" required name="end_date" >
                        </div>

                        <div class="col-1">
                            <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupPrepend">Color
                            </div>
                          <input type="hidden" id="hidden-input" class="demo" value="#2E64FE" name="event_color"></span>
                          <!-- otra version del picker
                            <input type="text" id="text-field" class="form-control demo minicolors-input" value="#70c24a" size="7">
                          -->  
                        </div>
                        
                      </div><br>
                      <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">Block level button</button>
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
<script src="{{asset('js/jquery.minicolors.js')}}"></script>
{!! $calendar->script() !!}
@endsection