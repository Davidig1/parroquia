@extends('layouts.app')

@section('content')

                
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
	</div>
@endif

  <div class="container">
      @if(session('flash'))
        <div class="alert alert-success" role="alert">
          <strong>Aviso:  </strong>{{session('flash')}}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
          </button>
        </div>
      @endif
  </div>

<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/bautismo.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">BAUTISMO</h5>
      <p class="card-text">El bautismo es un acto en el cual un cristiano es sumergido en agua para simbolizar el fin de un modo de vida, y el comienzo de algo nuevo.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearbautismo')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/comunion.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">COMUNION</h5>
      <p class="card-text">La Primera Comunión, para un niño, es uno de los momentos más importantes, espiritualmente está preparado para recibir el sacramento de la Eucaristía, ese pan y vino que anhela probar para sentirse envuelto por la gracia divina de Dios, luego de atravesar un período de preparación de por los menos dos años.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearcomunion')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/confirmacion.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">CONFIRMACION</h5>
      <p class="card-text">El sacramento de la Confirmación permite acoger al Espíritu Santo en el corazón y recibir sus siete dones: la sabiduría, la inteligencia, el consejo, la fortaleza, la ciencia, la piedad y el temor de Dios.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearconfirmacion')</small>
    </div>
  </div>
</div>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="img/matrimonio.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">MATRIMONIO</h5>
      <p class="card-text">Tu matrimonio es la empresa más importante de tu vida. Es el lugar donde puedes no sólo realizar tu vocación al amor y al servicio mientras creces y permites crecer a tu pareja, sino también el espacio donde el amor puede abrirse al milagro de una nueva vida.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearmatrimonio')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/catequesis.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">CATEQUESIS</h5>
      <p class="card-text">La catequesis es un símbolo fundamental en la iglesia católica cristiana, se basa en los sacramento de la vida espiritual. El catecismo es realizado mediante catequista, que son personas que se ofrecen de voluntad propia para dar doctrina a los jóvenes.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearcatequesis')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="...">
    <div class="card-body">
      <h5 class="card-title"></h5>
      <p class="card-text"></p>
    </div>
    <div class="card-footer">
      <small class="text-muted"></small>
    </div>
  </div>
</div>
@endsection
