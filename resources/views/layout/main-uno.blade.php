<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header')
</head>

<body>



    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            @include('layout.navbar-empresa')




        </div>

        @yield('content')


    </div>


    @include('layout.footer-')


    @include('layout.scrip')


</body>

</html>
