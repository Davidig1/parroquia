@extends('layouts.app')
@section('content')
<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-bautismo" role="tab" aria-controls="nav-home" aria-selected="true">BAUTISMO</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-confirmacion" role="tab" aria-controls="nav-profile" aria-selected="false">CONFIRMACION</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-comunion" role="tab" aria-controls="nav-contact" aria-selected="false">COMUNION</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-catequesis" role="tab" aria-controls="nav-contact" aria-selected="false">CATEQUESIS</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-matrimonio" role="tab" aria-controls="nav-contact" aria-selected="false">MATRIMONIO</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-bautismo" role="tabpanel" aria-labelledby="nav-home-tab">lista de baustismo
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($ba as $a)
			<tr>
				<th scope="row">{{$a->id}}</th>
				<td>{{$a->userins->nombre}}</td>
				<td>{{$a->userins->app}}</td>
				<td>{{$a->userins->apm}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-confirmacion" role="tabpanel" aria-labelledby="nav-profile-tab">
  	lista de confirmacion
  	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($con as $a)
			<tr>
				<th scope="row">{{$a->id}}</th>
				<td>{{$a->userins->nombre}}</td>
				<td>{{$a->userins->app}}</td>
				<td>{{$a->userins->apm}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-comunion" role="tabpanel" aria-labelledby="nav-contact-tab">Lista de comunion
	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($com as $a)
			<tr>
				<th scope="row">{{$a->id}}</th>
				<td>{{$a->userins->nombre}}</td>
				<td>{{$a->userins->app}}</td>
				<td>{{$a->userins->apm}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-catequesis" role="tabpanel" aria-labelledby="nav-profile-tab">
  	lista de confirmacion
  	<table class="table">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre</th>
				<th scope="col">Apellido Paterno</th>
				<th scope="col">Apellido Materno</th>
				<th scope="col"></th>
				<th scope="col"></th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($cat as $a)
			<tr>
				<th scope="row">{{$a->id}}</th>
				<td>{{$a->userins->nombre}}</td>
				<td>{{$a->userins->app}}</td>
				<td>{{$a->userins->apm}}</td>
				<td></td>
				<td></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
</div>
@endsection