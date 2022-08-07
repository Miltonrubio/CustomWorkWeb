  @extends('layout.main-uno')

  @section('content')
      <br><br>
      <div class="col-lg-12">
          <div class="col-md-12">
              <br><br><br>
              <div class="row row-card-no-pd">
                  <div class="col-md-12">
                      <h4 class="page-title">

                          <center>Actualizar las vacantes</center>

                      </h4>







                      <form action="/editar/{{ $empresa->id }}" method="POST">
                          {{ method_field('PUT') }}




                          @if ($errors->any())
                              <div class="alert alert-danger">
                                  <ul>
                                      @foreach ($errors->all() as $message)
                                          <li>{{ $message }}</li>
                                      @endforeach
                                  </ul>
                              </div>
                          @endif


                          @csrf
                          {{-- @csrf --}}
                          <!--HELPERT-->


                          <div class="form-group">
                              <label for="usr">Titulo</label>
                              <input type="text" class="form-control" id="usr" name="titulo"
                                  value="{{ $empresa->titulo }}">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Empresa:</label>
                              <input type="text" class="form-control" id="pwd" name="empresa"
                                  value="{{ $empresa->empresa }}">
                          </div>

                          <div class="form-group">
                              <label for="usr">Paga:</label>
                              <input type="number" class="form-control" id="usr" name="paga"
                                  value="{{ $empresa->paga }}">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Vacantes:</label>
                              <input type="number" class="form-control" id="pwd" name="vacante"
                                  value="{{ $empresa->vacante }}">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Telefono:</label>
                              <input type="number" class="form-control" id="pwd" name="telefono"
                                  value="{{ $empresa->telefono }}">
                          </div>

                          <div class="form-group">
                              <label for="usr">Descripcion:</label>
                              <input type="text" class="form-control" id="usr" name="descripcion"
                                  value="{{ $empresa->descripcion }}">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion1"
                                  value="{{ $empresa->descripcion1 }}">
                          </div>

                          <div class="form-group">
                              <label for="usr">Descripcion:</label>
                              <input type="text" class="form-control" id="usr" name="descripcion2"
                                  value="{{ $empresa->descripcion2 }}">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion3"
                                  value="{{ $empresa->descripcion3 }}">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion4"
                                  value="{{ $empresa->descripcion4 }}">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion5"
                                  value="{{ $empresa->descripcion5 }}">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion6"
                                  value="{{ $empresa->descripcion6 }}">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion7"
                                  value="{{ $empresa->descripcion7 }}">
                          </div>

                          <div class="form-group">
                              <label for="usr">E-mail:</label>
                              <input type="text" class="form-control" id="usr" name="email"
                                  value="{{ $empresa->email }}">>
                          </div>
                          <div class="form-group">
                              <label for="pwd">Usuario:</label>
                              <input type="text" class="form-control" id="pwd" name="usuario"
                                  value="{{ $empresa->usuario }}">
                          </div>

                          <div class="text-center">

                              <button type="submit" class="btn btn-primary center action_submit">Actualizar</button>
                          </div>
                      </form>
                  </div>




              </div>
          </div>
      </div>

      {{-- <footer class="footer">
          <div class="container-fluid">
              <nav class="pull-left">
                  <ul class="nav">
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              Empleos
                          </a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">
                              Help
                          </a>
                      </li>

                  </ul>
              </nav>
              <div class="copyright ml-auto">
                  Derechos reservados <a href="#">2022</a>
              </div>
          </div>
      </footer> --}}




  @endsection
