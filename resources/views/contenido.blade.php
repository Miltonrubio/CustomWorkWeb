@extends('layout.main')


@section('content')
    <div class="main-panel">
        <div class="content">
            <div class="panel-header bg-primary-gradient">
                <div class="page-inner py-5">
                    <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                        <div>
                            <h2 class="text-white pb-2 fw-bold"></h2>

                        </div>

                    </div>
                </div>
            </div>


            <div class="page-inner mt--5">


                @csrf


                <div class="row row-card-no-pd">
                    <div class="col-md-12">
                        <center>
                            <h4 class="page-title">Oferta de trabajo</h4>
                        </center>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">{{ $empresa->titulo }}</h4>

                                    </div>
                                    <div class="card-body">

                                        <div class="tab-content mt-2 mb-3" id="pills-tabContent">

                                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                                aria-labelledby="pills-home-tab">
                                                <h1 class="card-title">Numero de vacantes : {{ $empresa->vacante }}</h1>
                                                <p>Nombre de la empresa : {{ $empresa->empresa }}</p>
                                                <p>Salario mensual : $ {{ $empresa->paga }}</p>
                                                <h3>Descripcion de la vacante</h3>
                                                <p>{{ $empresa->descripcion1 }}</p>

                                                <p>{{ $empresa->descripcion2 }}</p>
                                                <p>{{ $empresa->descripcion3 }}</p>
                                                <p>{{ $empresa->descripcion4 }}</p>
                                                <p>{{ $empresa->descripcion5 }}</p>
                                                <p>{{ $empresa->descripcion6 }}</p>
                                                <p>{{ $empresa->descripcion7 }}</p>

                                            </div>

                                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                                aria-labelledby="pills-contact-tab">
                                                <h4 class="page-title">Comunicate con nosotros !</h4>
                                                <p>Nombre del contacto: {{ $empresa->usuario }}</p>

                                                <p>Telefono: {{ $empresa->telefono }}</p>
                                                <p>Correo electronico: {{ $empresa->email }}</p>
                                                <p>Nombre de la empresa: {{ $empresa->empresa }}</p>
                                            </div>
                                        </div>
                                        <ul class="nav nav-pills nav-secondary" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                    href="#pills-home" role="tab" aria-controls="pills-home"
                                                    aria-selected="true">Perfil</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill"
                                                    href="#pills-contact" role="tab" aria-controls="pills-contact"
                                                    aria-selected="false">Contacto directo a la empresa</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>










                        </div>
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


                    </ul>
                </nav>
                <div class="copyright ml-auto">
                    Derechos reservados <a href="#">2022</a>
                </div>
            </div>
        </footer>
    </div>
@endsection
