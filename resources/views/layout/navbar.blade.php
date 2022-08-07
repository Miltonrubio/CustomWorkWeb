<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="blue">


        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>

        </button>


        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>

        </div>



    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">



        <div class="container-fluid">





            <ul class="navbar-nav mr-auto">



                <li><a href="/" class="btn btn-white btn-border btn-round mr-2">
                        I n i c i o</a></li>

            </ul>

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <br>


                <div class="dropdown">
                    <button type="button" class="btn btn-white dropdown-toggle btn-border btn-round mr-2"
                        data-toggle="dropdown">
                        Empresa
                    </button>
                    <div class="dropdown-menu">

                        <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}

                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }} Publicar
                                empleos</a>
                    </div>
                </div>


                <ul class="navbar-nav mr-auto">



                    <a href="contacto" class="btn btn-white btn-border btn-round mr-2">
                        Contacto</a>
                </ul>


                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-layer-group"></i>
                    </a>
                    <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                        <div class="quick-actions-header">
                            <span class="title mb-1">Acciones rápidas</span>
                            <span class="subtitle op-8">Atajos</span>
                        </div>
                        <div class="quick-actions-scroll scrollbar-outer">
                            <div class="quick-actions-items">
                                <div class="row m-0">
                                    <a class="col-6 col-md-4 p-0"
                                        href="https://www.livecareer.es/lp/es/lesrsmlp07.aspx?utm_source=google&utm_medium=sem&utm_campaign=210548227&utm_term=curriculum%20vitae&network=g&device=c&adposition=&adgroupid=14730012907&gclid=CjwKCAjw3K2XBhAzEiwAmmgrAjfJDEYsN1AejzzF5QGTHayHZOsiSKascQv2sQ7mCKCOgAwoHyRB-RoCwgUQAvD_BwE">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-file-1"></i>
                                            <span class="text">Crear CV's</span>
                                        </div>
                                    </a>

                                    <a class="col-6 col-md-4 p-0" href="/empresa">
                                        <div class="quick-actions-item">
                                            <i class="flaticon-pen"></i>
                                            <span class="text">Crear nueva publicacion</span>
                                        </div>
                                    </a>



                                </div>
                            </div>
                        </div>
                    </div>
                </li>








            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
