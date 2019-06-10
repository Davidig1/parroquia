<!DOCTYPE html>
<html>
<head>
    <title>Reporte</title>
      <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <h4 class="text-dark">SACRAMENTO BAUTISMO</h4>
   
          
    <h6 class="text-white bg-dark">Lista de inscritos</h6>
    
                      
    <div class="table-responsive">              
        <table class="table table-bordered" id="verestudiantes">
            <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Fecha de Nacimiento</th>
                <th scope="col"></th>
                
                
            </tr>
            </thead>

            <tbody>
                            
                
                  
                @foreach ($user as $us) 
                                    
                <tr>
                    <th scope="row">{{$us->id}}</th>
                    <td>{{$us->userins->nombre}}</td>
                    <td>{{$us->userins->app}}</td>
                    <td>{{$us->userins->apm}}</td>
                    <td>{{$us->userins->fxn}}</td>
                    <td></td>
                                
                </tr>

                @endforeach
                             
                              
                          
            </tbody>
        </table>
    </div>


</body>
</html>