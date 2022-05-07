@extends('base/base')
@section( 'title','Registro')
@section('contenidoPrincipal')

<!--FORMULARIO DE REGISTRO-->
   <div class=" m-0  vh-100 row  justify-content-center align-items-center">
        <main class="form-signin text-center">
            <form method="POST" action="">
                <img class="mb-4" src="{{ asset('img/logo.svg') }}" alt="" width="90" height="90">
                <h1 class="h4 mb-3 fw-normal">Registrarse</h1>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Numero de carnet" name="numeroCarnet">
                    <label>Numero de Carnet</label>
                </div>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Nombre" name="nombre">
                    <label>Nombre</label>
                </div>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Apellido" name="apellido">
                    <label>Apellido</label>
                </div>
    
                <div class="form-floating">
                    <input type="password" class="form-control bg-c-bla" placeholder="Contraseña" name="contraseña">
                    <label>Contraseña</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control bg-c-bla" placeholder="Repetir Contraseña" name="contraseña_confirmar">
                    <label>Repetir Contraseña</label>
                </div>
    
                <button class="w-100 btn btn-lg  bg-c-pri co-se" type="submit">Registrar</button>
                <p class="mt-2 mb-3 text-muted">wild&copy;2022</p>
                <p>Ingresa <a href="{{ url('/') }}">Aqui</a>.</p>
            </form>
        </main>
   </div>
    <!--FORMULARIO DE REGISTRO-->
@endsection
