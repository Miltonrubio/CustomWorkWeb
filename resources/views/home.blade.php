@extends('layouts.app')

@section('content')
    <div class="container">

        <a href="/create_usuario" class="btn btn-primary mb-3">CREAR</a>

        <table id="articulos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
            <thead class="bg-primary text-white">
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Acciones</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->usuario }}</td>
                        <td>{{ $usuario->telefono }}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>{{ $usuario->id }}</td>
                        <td>{{ $usuario->empresa_id }}</td>






                        <td class="action_td">


                            <a href="/editar_usuario/{{ $usuario->id }}"><button type="button"
                                    class="btn btn-info">Editar</button></a>

                            <a href="/delete_usuario/{{ $usuario->id }}"><button type="button"
                                    class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>
                @endforeach

                @foreach ($empresas as $empresa)
                    {{-- <td>{{ $usuario->usuario }}</td> --}}
                    {{-- {{ $empresas, $usuario->usuario }} --}}
                @endforeach
                {{ $empresas }}
            </tbody>
        </table>
    </div>
@endsection
