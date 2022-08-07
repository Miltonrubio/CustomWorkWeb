  @extends('layout.main-uno')

  @section('content')
      <br><br>


      <br><br>

      <div class="col-md-12">
          <h4 class="page-title">

              <center>Lista de Vacantes</center>

          </h4>



          <a href="/create"><button type="button" class="btn btn-dark right action_create">Create</button></a>

          <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
              <thead class="bg-secondary text-white" mr-8>

                  <tr>
                      <th>ID</th>
                      <th>Titulo</th>
                      <th>Empresa</th>
                      <th>Paga</th>
                      <th>Vacantes</th>
                      <th>Telefono</th>
                      <th>Requisitos de perfil</th>
                      <th></th>
                      <th></th>
                      <th>No requisitos</th>
                      <th></th>
                      <th>Competencias:</th>
                      <th></th>
                      <th></th>
                      <th>E-mail</th>
                      <th>Nombre del contacto</th>
                      <th>
                          <center> Acciones </center>

                      </th>

                  </tr>
              </thead>

              <tbody>
                  @foreach ($empresas as $empresa)
                      <tr>
                          <td>{{ $empresa->id }}</td>
                          <td>{{ $empresa->titulo }}</td>
                          <td>{{ $empresa->empresa }}</td>
                          <td>$ {{ $empresa->paga }}</td>
                          <td>{{ $empresa->vacante }}</td>
                          <td>{{ $empresa->telefono }}</td>
                          <td>{{ $empresa->descripcion }}</td>
                          <td>{{ $empresa->descripcion1 }}</td>
                          <td>{{ $empresa->descripcion2 }}</td>
                          <td>{{ $empresa->descripcion3 }}</td>
                          <td>{{ $empresa->descripcion4 }}</td>
                          <td>{{ $empresa->descripcion5 }}</td>
                          <td>{{ $empresa->descripcion6 }}</td>
                          <td>{{ $empresa->descripcion7 }}</td>
                          <td>{{ $empresa->email }}</td>
                          <td>{{ $empresa->usuario }}</td>

                          <td class="action_od">

                              <a href="/editar/{{ $empresa->id }}" type="button" class="btn btn-primary"><i
                                      class="fa fa-fw fa-edit"></i></a>


                              <a href="/delete/{{ $empresa->id }}" type="button" class="btn btn-danger"><i
                                      class="far fa-trash-alt"></i></a>




                          </td>





                      </tr>
                  @endforeach
              </tbody>
          </table>
          {{-- {{ $empresas->links() }} --}}
          {{-- <ul class=" pagination justify-content-center">

              <li class=" page-item">{{ $empresas->links() }}</li>

          </ul> --}}
      </div>



      </div>


      </div>
  @endsection
