<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header')
</head>

<body>


    <div class="wrapper">
        @include('layout.navbar')
        @include('layout.sidebar')

        @yield('content')



    </div>


    @include('layout.footer')

    @include('layout.scrip')
</body>

</html>
