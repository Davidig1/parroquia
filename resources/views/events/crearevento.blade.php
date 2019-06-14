
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createmodal">
        Crear Nuevo Evento
</button>


<div class="modal fade" id="createmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <link href="{{asset('/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{asset('css/jquery.minicolors.css')}}">
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

<script src="{{asset('js/jquery.minicolors.js')}}"></script>


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