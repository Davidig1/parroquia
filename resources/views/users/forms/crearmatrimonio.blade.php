<button type="button" class="btn btn-success" data-toggle="modal" data-target="#crearmat">
  Agregar +
</button>

<!-- Modal -->
<div class="modal fade" id="crearmat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Registro Matrimonio</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{route('matrimonio.crear')}}" method="POST">
          {{ csrf_field() }}
          <div class="card text-center">
            <h4 class="card-title">REQUISITOS MATRIMONIO</h4>
          </div>
          <div class="container">
            <div class="row">
              <div class="col"><div class="card text-center">
          <h5 class="card-title">DEL NOVIO</h5>
          </div></div>
              <div class="col"><div class="card text-center">
          <h5 class="card-title">DE LA NOVIA</h5>
          </div></div>
            </div>
          </div>


          <div class="container">
            <div class="row">
              <div class="col"><label for="inputCity">Ingrese sin espacios ni guiones: Oficialia, Libro, Partida, Folio</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Oficialia, Libro, Partida, Folio" name="cnno">
              <label for="inputCity">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="inputCity" name="fxno">
              </div>
              <div class="col"><label for="inputCity">Ingrese sin espacios ni guiones: Oficialia, Libro, Partida, Folio</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Oficialia, Libro, Partida, Folio" name="cnna">
              <label for="inputCity">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="inputCity" name="fxna">
              </div>
              <div class="w-100"></div>
              <div class="col"><label for="inputEmail4">Nombre(s)</label>
              <input type="text" class="form-control" placeholder="Nombre(s)" name="nombreno">
             <label for="inputPassword4">Apellido Paterno</label>
              <input type="text" class="form-control" placeholder="Apellido Paterno" name="appno">
              <label for="inputPassword4">Apellido Materno</label>
              <input type="text" class="form-control" placeholder="Apellido Materno" name="apmno"></div>
              <div class="col"><label for="inputEmail4">Nombre(s)</label>
              <input type="text" class="form-control" placeholder="Nombre(s)" name="nombrena">
             <label for="inputPassword4">Apellido Paterno</label>
              <input type="text" class="form-control" placeholder="Apellido Paterno" name="appna">
              <label for="inputPassword4">Apellido Materno</label>
              <input type="text" class="form-control" placeholder="Apellido Materno" name="apmna"></div>
            </div>
          </div>


          <div class="container">

            <div class="row">
              <div class="col">
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Certificado de Nacimiento Fotocopia</legend>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="fcnno" id="gridRadios1" value="1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="fcnno" id="gridRadios2" value="0">
                        <label class="form-check-label" for="gridRadios2">
                          PENDIENTE
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

                  <div class="col">

                    <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Certificado de Nacimiento Fotocopia</legend>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="fcnna" id="gridRadios1" value="1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="fcnna" id="gridRadios2" value="0">
                        <label class="form-check-label" for="gridRadios2">
                          PENDIENTE
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

              <div class="w-100"></div>

              <div class="col">
                <fieldset class="form-group">
                  <div class="row">
                    <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I.</legend>
                    <div class="col-sm-5">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="focino" id="gridRadios1" value="1" checked>
                        <label class="form-check-label" for="gridRadios1">
                          SI
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="focino" id="gridRadios2" value="0">
                        <label class="form-check-label" for="gridRadios2">
                          PENDIENTE
                        </label>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>

                  <div class="col">

                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I.</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="focina" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="focina" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>

                <div class="row">
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Certificado de Confirmacion Original</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cconno" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cconno" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Certificado de Confirmacion Original</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cconna" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cconna" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>

                  <div class="w-100"></div>

                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Certificado de Bautismo Original</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cbano" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cbano" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Certificado de Bautismo Original</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cbana" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cbana" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                </div>
              </div>
              
              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col col-lg-2">
                    
                  </div>
                  <div class="col-md-auto">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-6 pt-0">Certificado de Matrimonio Civil Fotocopia</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cmc" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="cmc" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col col-lg-2">
                    
                  </div>
                </div>
              </div>

              


              <div class="container">
                <div class="row justify-content-md-center">
                  <div class="col col-lg-2">
                    
                  </div>
                  <div class="col-md-auto">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-6 pt-0">Pase Matrimonial</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pm" id="gridRadios1" value="2" checked>
                            <label class="form-check-label" for="gridRadios1">
                              NO
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pm" id="gridRadios1" value="1" >
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pm" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col col-lg-2">
                    
                  </div>
                </div>
              </div>
                    


              <div class="card text-center">
                <h4 class="card-title">TESTIGOS</h4>
              </div>
              <br>
              <div class="container">
                <div class="row">
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I. Testigos</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tfcino" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tfcino" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I. Testigos</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tfcina" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="tfcina" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  
                </div>
              </div>
      
          
            


          <div class="card text-center">
            <h4 class="card-title">PADRINOS</h4>
          </div>
          <br>
          <div class="container">
                <div class="row">
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I. Padrinos</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pfcino" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pfcino" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  <div class="col">
                    <fieldset class="form-group">
                      <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I. Padrinos</legend>
                        <div class="col-sm-5">
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pfcina" id="gridRadios1" value="1" checked>
                            <label class="form-check-label" for="gridRadios1">
                              SI
                            </label>
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="pfcina" id="gridRadios2" value="0">
                            <label class="form-check-label" for="gridRadios2">
                              PENDIENTE
                            </label>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </div>
                  
                </div>
              </div>
      

          <div class="modal-footer">
            @include('events.crearevento')
            <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>