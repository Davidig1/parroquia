<!DOCTYPE html>
<html>
<head>
    <title>Reporte</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
<h4 class="text-primary">GESTION DE REPORTES</h4>
          
    <h6 class="text-info">Ver reportes</h6>
    
                      
    <div class="table-responsive">              
        <table class="table table-bordered" id="verestudiantes">
            <thead class="thead-light">
            <tr>
                <th scope="col" id="id">#</th>
                <th scope="col" id="ci">Nombre</th>
                <th scope="col" id="name">Descripcion</th>
                <th scope="col" id="ap">Precio</th>
                <th scope="col" id="am">Fecha de inicio</th>
                <th scope="col" id="email">Fecha de fin</th>
                
                
            </tr>
            </thead>

            <tbody>
                            
                
                  
                @foreach ($events as $event) 
                                    
                <tr>
                    <th scope="row">
                        {{$event->id}}</th>
                    <td>{{$event->event_name}}</td>    
                    <td>{{$event->event_des}}</td>
                    <td>{{$event->event_price}}</td>
                    <td>{{$event->start_date}}</td>
                    <td>{{$event->end_date}}</td>
                                
                </tr>

                @endforeach
                             
                              
                          
            </tbody>
        </table>
    </div>


</body>
</html>

