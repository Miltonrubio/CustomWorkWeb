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
                <div class="row mt--2">
                    <div class="col-md-12">
                        <div class="card full-height">
                            <div class="card-body">
                                <div class="card-title t">
                                </div>
                                <div class="card-category"></div>
                                <div class="container-fluid">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <form actionn="" method="get" class="d-flex">
                                                    <input name="texto" value="{{ $texto }}"
                                                        class="form-control me-2" type="search"
                                                        placeholder="Buscar Empleos,área laboral o empresa"
                                                        aria-label="Search">


                                                    <div class="col-md-2">
                                                        <button class="btn btn-outline-primary"
                                                            type="submit">Search</button>
                                                    </div>


                                                </form>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row row-card-no-pd">


                    <div class="col-md-12">



                        <center>
                            <h4 class="page-title">Vacantes Disponibles</h4>
                        </center>


                        <div class="row justify-content-center align-items-center mb-5">

                            <div class="row">
                                @if (count($empresas) <= 0)
                                    <tr>

                                        <center>
                                            <h1 class="text-warning"">" No hay registros "</h1>
                                        </center>
                                    </tr>
                                @else
                                    @foreach ($empresas as $e)
                                        <div class="col-md-4">

                                            <div class="card-pricing2 card-secondary">

                                                <div class="pricing-header">
                                                    <h3 class="fw-bold">{{ $e->titulo }}</h3>
                                                    <span class="sub-title">$ {{ $e->paga }} Mensual +
                                                        comisiones</span>
                                                </div>
                                                <div class="price-value">
                                                    <div class="value">
                                                        <span class="currency"></span>
                                                        <span class="amount">{{ $e->vacante }}<span< /span></span>
                                                        <span class="month">Vacantes</span>
                                                    </div>
                                                </div>
                                                <ul class="pricing-content">
                                                    <li>{{ $e->descripcion }}</li>
                                                    <li>{{ $e->descripcion1 }}</li>
                                                    <li>{{ $e->descripcion2 }}</li>


                                                    <li class="disable">{{ $e->descripcion3 }}</li>
                                                    <li class="disable">{{ $e->descripcion4 }}</li>
                                                </ul>
                                                <a href="/contenido/{{ $e->id }}"
                                                    class="btn btn-outline-primary btn-lg w-75 fw-bold mb-3">+
                                                    Detalles</a>




                                            </div>

                                            <br><br>


                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>


                        {{ $empresas->links() }}

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
    </div>

    <!-- Custom template | don't include it in your project! ENGRANE -->
    <div class="custom-template">
        <div class="title">Settings</div>
        <div class="custom-content">
            <div class="switcher">
                <div class="switch-block">
                    <h4>Logo Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeLogoHeaderColor" data-color="dark"></button>
                        <button type="button" class="selected changeLogoHeaderColor" data-color="blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeLogoHeaderColor" data-color="dark2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="purple2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="light-blue2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="green2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="orange2"></button>
                        <button type="button" class="changeLogoHeaderColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Navbar Header</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeTopBarColor" data-color="dark"></button>
                        <button type="button" class="changeTopBarColor" data-color="blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue"></button>
                        <button type="button" class="changeTopBarColor" data-color="green"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange"></button>
                        <button type="button" class="changeTopBarColor" data-color="red"></button>
                        <button type="button" class="changeTopBarColor" data-color="white"></button>
                        <br />
                        <button type="button" class="changeTopBarColor" data-color="dark2"></button>
                        <button type="button" class="selected changeTopBarColor" data-color="blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="purple2"></button>
                        <button type="button" class="changeTopBarColor" data-color="light-blue2"></button>
                        <button type="button" class="changeTopBarColor" data-color="green2"></button>
                        <button type="button" class="changeTopBarColor" data-color="orange2"></button>
                        <button type="button" class="changeTopBarColor" data-color="red2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Sidebar</h4>
                    <div class="btnSwitch">
                        <button type="button" class="selected changeSideBarColor" data-color="white"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark"></button>
                        <button type="button" class="changeSideBarColor" data-color="dark2"></button>
                    </div>
                </div>
                <div class="switch-block">
                    <h4>Background</h4>
                    <div class="btnSwitch">
                        <button type="button" class="changeBackgroundColor" data-color="bg2"></button>
                        <button type="button" class="changeBackgroundColor selected" data-color="bg1"></button>
                        <button type="button" class="changeBackgroundColor" data-color="bg3"></button>
                        <button type="button" class="changeBackgroundColor" data-color="dark"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom-toggle">
            <i class="flaticon-settings"></i>
        </div>
    </div>
@endsection
