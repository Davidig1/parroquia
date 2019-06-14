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

  <div class="tab-pane fade show active" id="nav-bautismo" role="tabpanel" aria-labelledby="nav-home-tab">Lista de BAUTISMO
	<div class="float-right">
		<a href="{{route ('lista.bau')}}">Descargar Lista Bautismo</a>
	</div>
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
				<td><a href="{{route ('reporte.bau', $a)}}">Descargar Certificado</a></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-confirmacion" role="tabpanel" aria-labelledby="nav-profile-tab">
  	lista de CONFIRMACION
  	<div class="float-right">
		<a href="{{route ('lista.con')}}">Descargar Lista Confirmacion</a>
	</div>
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
				<td><a href="{{route ('reporte.con', $a)}}">Descargar Certificado</a></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-comunion" role="tabpanel" aria-labelledby="nav-contact-tab">Lista de COMUNION
  	<div class="float-right">
		<a href="{{route ('lista.com')}}">Descargar Lista Comunion</a>
	</div>
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
				<td><a href="{{route ('reporte.com', $a)}}">Descargar Certificado</a></td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
  </div>
  <div class="tab-pane fade" id="nav-catequesis" role="tabpanel" aria-labelledby="nav-profile-tab">
  	lista de CATEQUESIS
  	<div class="float-right">
		<a href="{{route ('lista.cat')}}">Descargar Lista Catequesis</a>
	</div>
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
				<td><a href="{{route ('reporte.cat', $a)}}">Descargar Certificado</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>

  <div class="tab-pane fade" id="nav-matrimonio" role="tabpanel" aria-labelledby="nav-profile-tab">
  	Lista de Matrimonio
  	<div class="float-right">
		<a href="{{route ('lista.mat')}}">Descargar Lista Matrimonio</a>
	</div>
  	<table class="table">

		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Nombre Novio</th>
				<th scope="col">Apellido Paterno Novio</th>
				<th scope="col">Apellido Materno Novio</th>
				<th scope="col">Nombre Novia</th>
				<th scope="col">Apellido Paterno Novio</th>
				<th scope="col">Apellido Materno Novia</th>
				<th scope="col"></th>
			</tr>
		</thead>
		<tbody>
			@foreach($mat as $m)
			<tr>
				<th scope="row">{{$m->id}}</th>
				<td>{{$m->nombreno}}</td>
				<td>{{$m->appno}}</td>
				<td>{{$m->apmno}}</td>
				<td>{{$m->nombrena}}</td>
				<td>{{$m->appna}}</td>
				<td>{{$m->apmna}}</td>
				<td><a href="{{route ('reporte.mat', $m)}}">Descargar Certificado</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
  </div>
</div>
@endsection