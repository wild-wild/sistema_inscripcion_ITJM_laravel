<!doctype html>
<html lang="es">

@include('base.head')

<body class="bg-c-bla p-0 m-0">

    @include('base.navbar')
    @include('base.sidebar')

    @yield('contenidoEnBody')


    @include('base.script')
</body>

</html>
