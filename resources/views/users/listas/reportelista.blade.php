<!DOCTYPE html>
<html>
<head>
    <title>Reporte</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <h4 class="text-dark">SACRAMENTO {{$sac}}</h4>
   
          
    <h6 class="text-white bg-dark">Lista de Inscritos</h6>
    
                      
    <div class="table-responsive">              
        <table class="table table-bordered" id="verestudiantes">
            <thead class="thead-light">
             @if($sac == "MATRIMONIO")
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre Novio</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <td></td> 
                <th scope="col">Nombre Novia</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                </tr>
             @else
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Fecha de Nacimiento</th>
                </tr>
             @endif
            </thead>
            <tbody>
                @foreach ($user as $us) 
                @if($sac == "MATRIMONIO")
                    <tr>
                    <th scope="row">{{$us->id}}</th>
                    <td>{{$us->nombreno}}</td>
                    <td>{{$us->appno}}</td>
                    <td>{{$us->apmno}}</td>
                    <td></td> 
                    <td>{{$us->nombrena}}</td>
                    <td>{{$us->appna}}</td>
                    <td>{{$us->apmna}}</td>      
                    </tr>
                @else
                    <tr>
                    <th scope="row">{{$us->id}}</th>
                    <td>{{$us->userins->nombre}}</td>
                    <td>{{$us->userins->app}}</td>
                    <td>{{$us->userins->apm}}</td>
                    <td>{{$us->userins->fxn}}</td>
                    </tr>
                @endif                    
                @endforeach          
            </tbody>
        </table>
    </div>


</body>
</html>