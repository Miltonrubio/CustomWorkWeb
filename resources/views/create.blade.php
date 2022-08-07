  @extends('layout.main-uno')

  @section('content')
      <br><br>
      <div class="col-lg-12">
          <div class="col-md-12">
              <br><br><br>
              <div class="row row-card-no-pd">
                  <div class="col-md-12">
                      <h4 class="page-title">

                          <center>Crea tus Vacantes</center>

                      </h4>







                      <form action="/create" method="POST">
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
                          <!--HELPERT-->
                          <div class="clearfix"></div>

                          <div class="form-group">
                              <label for="usr">Titulo</label>
                              <input type="text" class="form-control" id="usr" name="titulo"
                                  placeholder="Ingresa el oficio o profesion">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Empresa:</label>
                              <input type="text" class="form-control" id="pwd" name="empresa"
                                  placeholder="Ingresa el nombre de la empresa">
                          </div>

                          <div class="form-group">
                              <label for="usr">Paga:</label>
                              <input type="number" class="form-control" id="usr" name="paga"
                                  placeholder="Ingresa la paga">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Vacantes:</label>
                              <input type="number" class="form-control" id="pwd" name="vacante"
                                  placeholder="Ingresa numero de vacantes">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Telefono:</label>
                              <input type="number" class="form-control" id="pwd" name="telefono"
                                  placeholder="Ingresa numero de Telefono">
                          </div>



                          <div class="form-group">
                              <center> <label for="usr">Requisitos de perfil de la vacante</label></center>

                          </div>
                          <div class="form-group">
                              <label for="usr">Descripcion:</label>

                              <input type="text" class="form-control" id="usr" name="descripcion"
                                  placeholder="Ingresa descripcion">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion1"
                                  placeholder="Ingresa descripcion">
                          </div>

                          <div class="form-group">
                              <label for="usr">Descripcion:</label>
                              <input type="text" class="form-control" id="usr" name="descripcion2"
                                  placeholder="Ingresa descripcion">
                          </div>
                          <div class="form-group">
                              <center> <label for="usr">No requisitos de perfil de la vacante</label></center>

                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion3"
                                  placeholder="Ingresa descripcion">
                          </div>

                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion4"
                                  placeholder="Ingresa descripcion">
                          </div>
                          <div class="form-group">
                              <center> <label for="usr">Conocimientos y habilidades</label></center>

                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion5"
                                  placeholder="Ingresa descripcion">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion:</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion6"
                                  placeholder="Ingresa descripcion">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Descripcion General</label>
                              <input type="text" class="form-control" id="pwd" name="descripcion7"
                                  placeholder="Ingresa descripcion">
                          </div>

                          <div class="form-group">
                              <label for="usr">E-mail:</label>
                              <input type="text" class="form-control" id="usr" name="email"
                                  placeholder="Ingresa la E-mail">
                          </div>
                          <div class="form-group">
                              <label for="pwd">Nombre del contacto</label>
                              <input type="text" class="form-control" id="pwd" name="usuario"
                                  placeholder="Ingresa usario">
                          </div>

                          <div class="text-center">
                              <button type="submit" class="btn btn-secondary right action_submit"><i
                                      class="  fas fa-save   "></i>
                                  Guardar
                              </button>
                          </div>

                      </form>
                  </div>




              </div>
          </div>
      </div>

      <footer class="footer">
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
      </footer>
  @endsection
