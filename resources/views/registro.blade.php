@extends('base/base')

@section('contenidoPrincipal')

<!--FORMULARIO DE REGISTRO-->
   <div class=" m-0  vh-100 row  justify-content-center align-items-center">
        <main class="form-signin text-center">
            <form>
                <img class="mb-4" src="{{ asset('img/logo.svg') }}" alt="" width="90" height="90">
                <h1 class="h4 mb-3 fw-normal">Registrarse</h1>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Usuario">
                    <label>Usuario</label>
                </div>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Usuario">
                    <label>Nombre</label>
                </div>
    
                <div class="form-floating">
                    <input type="text" class="form-control bg-c-bla" placeholder="Usuario">
                    <label>Apellido</label>
                </div>
    
                <div class="form-floating">
                    <input type="password" class="form-control bg-c-bla" placeholder="Contraseña">
                    <label>Contraseña</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control bg-c-bla" placeholder="Repetir Contraseña">
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
