<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#crearconfirmacion">
  Agregar
</button>

<!-- Modal -->
<div class="modal fade" id="crearconfirmacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nuevo Comunion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        <form action="{{route('confirmacion.crear')}}" method="POST">
          {{ csrf_field() }}
          
          <input type="hidden" name="sacramento" value="confirmacion">
          <div class="card text-center">
          <h4 class="card-title">Certificado de Nacimiento</h4>
          </div>
          <br>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">Ingrese sin espacios ni guiones: Oficialia, Libro, Partida, Folio</label>
              <input type="text" class="form-control" id="inputCity" placeholder="Oficialia, Libro, Partida, Folio" name="cn">
            </div>

            <div class="form-group col-md-6">
              <label for="inputCity">Fecha de Nacimiento</label>
              <input type="date" class="form-control" id="inputCity" name="fxn">
            </div>
          </div>

          <div class="form-row">
            <div class="form-group col-md-4">
              <label for="inputEmail4">Nombre(s)</label>
              <input type="text" class="form-control" placeholder="Nombre(s)" name="nombre">
            </div>

            <div class="form-group col-md-4">
              <label for="inputPassword4">Apellido Paterno</label>
              <input type="text" class="form-control" placeholder="Apellido Paterno" name="app">
            </div>

            <div class="form-group col-md-4">
              <label for="inputPassword4">Apellido Materno</label>
              <input type="text" class="form-control" placeholder="Apellido Materno" name="apm">
            </div>
          </div>

          <div class="form-row">
            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Nacimiento Original</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cno" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cno" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Nacimiento Fotocopia</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cnf" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cnf" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I. Apoderado</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fca" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fca" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>


          <div class="form-row">
            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Bautizo Original</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauo" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauo" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Bautizo Fotocopia</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauf" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauf" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>



          <div class="form-row">
            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Comunion Original</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ccomo" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauo" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Comunion Fotocopia</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="ccomf" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cbauf" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
            


          <div class="card text-center">
            <h4 class="card-title">PADRINOS</h4>
          </div>
          <br>


          <div class="form-row">
            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Fotocopia C.I.</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fcp" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="fcp" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>

            <fieldset class="form-group col-md-4">
              <div class="row">
                <legend class="col-form-label col-sm-4 pt-0">Certificado de Bautizo o Confirmacion o Matrimonio (Religioso)</legend>
                <div class="col-sm-5">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cpa" id="gridRadios1" value="1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      SI
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="cpa" id="gridRadios2" value="0">
                    <label class="form-check-label" for="gridRadios2">
                      PENDIENTE
                    </label>
                  </div>
                </div>
              </div>
            </fieldset>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Ccancelar</button>
            <button type="submit" class="btn btn-success">Guardar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>