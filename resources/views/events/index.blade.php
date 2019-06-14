@extends('layouts.app')

@section('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{asset('css/jquery.minicolors.css')}}">
 <!-- Bootstrap 3
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

 
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
-->

<link href="{{asset('/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
@endsection

@section('content')

  <div>
    <h1 class="h3 mb-2 text-gray-800">
        <font style="vertical-align: inherit;">Calendario</font>
    </h1>
    <div class="float-right">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createmodal">
        Crear Nuevo Evento
      </button>
    </div>
  </div>
  <br><br><br>


<div class="card shadow mb-4">
            <div class="card-header py-3 row">
                <div class="col">
                  <h6 class="m-0 font-weight-bold text-primary">Lista de Eventos</h6>
                </div>  
                <div class="float-right">
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
                    Abrir Calendario
                  </button>
                  <button type="button" class="btn btn-alert" data-toggle="modal" data-target="#reportesmodal">Reportes</button>
                </div>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Precio</th>
                      <th>Fecha y hora de inicio</th>
                      <th>Fecha y hora de fin</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nombre</th>
                      <th>Descripcion</th>
                      <th>Precio</th>
                      <th>Fecha y hora de inicio</th>
                      <th>Fecha y hora de fin</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($data as $events)
                    <tr>
                      <td>{{$events->id}}</td>
                      <td>{{$events->event_name}}</td>
                      <td>{{$events->event_des}}</td>
                      <td>{{$events->event_price}}&nbsp;Bs</td>
                      <td>{{$events->start_date}}</td>
                      <td>{{$events->end_date}}</td>
                      <td>
                          <a href="{{ route('events.view',['event' => $events ])}}" class="btn btn-info btn-circle">
                            <i class="fas fa-info-circle"></i>
                          </a>
                      </td>
                      <td>
                          <a href="{{ route('events.delete',['event' => $events ])}}" class="btn btn-danger btn-circle">
                            <i class="fas fa-trash"></i>
                          </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>




  <!-- Modal -->
<div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear nuevo Eventoe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form class="form-group" method="post" action="{{ route('events.create') }}">
                  {{csrf_field()}}
          
              <div class="form-group">
                <label class="font-weight-normal">Nombre del evento</label>
                <input type="text" name="event_name" class="form-control" placeholder="Ingrese un nombre para el evento">
              </div>
              <br>
              <div class="form-group">
                <label class="font-weight-normal">Descripcion del evento</label>
                <input type="text" name="event_des" class="form-control" placeholder="Describa los detalles del evento">
              </div>

              <div class="form-group">
                <label class="font-weight-normal">Precio del evento</label>
                <input type="text" name="event_price" class="form-control" placeholder="Precio en bolivianos">
              </div>

               <!-- otro selector de fecha   
              <div class="form-group">
                <div class="input-group date start col-md-5" data-date="2019-01-01T00:00:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                  <label class="font-weight-normal">Fecha de inicio del evento</label>
                  <input class="form-control" size="16" type="text" value="" readonly>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
                  <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
                  <input type="hidden" id="dtp_input1" value="" name="start_date" /><br/>
              </div>
              -->
              <div class="form-group">
                <label class="font-weight-normal">Fecha de inicio del evento</label>
                <input type="datetime-local" class="form-control" class="date" name="start_date" /><br/>
              </div>

              <div class="form-group">
                <label class="font-weight-normal">Fecha de fin del evento</label>
                <input type="datetime-local" class="form-control" class="date" name="end_date" /><br/>
              </div>
              
              <!-- PICKER DE COLOR -->  
              <div class="form-group">
                <label class="font-weight-normal">Color en el calendario</label>
                <input type="hidden" id="hidden-input" class="demo" value="#2E64FE" name="event_color"></span>
                  <!-- otra version del picker
                  <input type="text" id="text-field" class="form-control demo minicolors-input" value="#70c24a" size="7">
                  -->  
              </div>
              <!-- FIN PICKER DE COLOR --> 
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
      </div>
    </div>
  </div>
</div>






<!-- Modal Calendario-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Calendario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {!! $calendar->calendar() !!}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
  </div>
</div>


<!-- Modal Reportes-->
<div class="modal fade" id="reportesmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Generacion de reportes</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

           <form class="form-group" method="post" action="{{ route('events.report') }}">
                  {{csrf_field()}}

             <a href="" class="text-primary">Indique las fechas de inicio y fin de las que se generara el reporte</a>     
             <div class="form-group">
                <label class="font-weight-normal">Fecha de inicio</label>
                <input type="date" class="form-control" class="date" name="start_date_report" /><br/>
              </div>

              <div class="form-group">
                <label class="font-weight-normal">Fecha de fin</label>
                <input type="date" class="form-control" class="date" name="end_date_report" /><br/>
              </div>
        </div>
        <div class="modal-footer">
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Generar</button>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection










@section('script')


<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="{{asset('js/fullcalendar.min.js')}}"></script>
<script src="{{asset('js/jquery.minicolors.js')}}"></script>
{!! $calendar->script() !!}


<script type="text/javascript" src="{{asset('/js/bootstrap-datetimepicker.js')}}" charset="UTF-8"></script>
<script type="text/javascript" src="{{asset('/js/bootstrap-datetimepicker.fr.js')}}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.start').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });

    $('.end').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    forceParse: 0,
        showMeridian: 1
    });
  
</script>

<!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection
