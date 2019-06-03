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
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearbautismo')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/comunion.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearcomunion')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/confirmacion.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
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
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearmatrimonio')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="img/catequesis.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">@include('users.forms.crearcatequesis')</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="..." alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
@endsection
