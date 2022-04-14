<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- mi estilos CSS -->
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
    <!-- mi estilos CSS color de iconos -->
    <link href="{{ asset('css/colorIconos.css') }}" rel="stylesheet">
    <!--titulo-->
    <title>ITJM</title>
</head>

<body class="ba-itjm">

    @yield('contenidoPrincipal')

    <!-- Bootstrap js -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
