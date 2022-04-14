@extends('base/base')

@section('contenidoPrincipal')
    <main class="form-signin text-center">
        <form>
            <img class="mb-4" src="{{ asset('img/logo.svg') }}" alt="" width="90" height="90">
            <h1 class="h4 mb-3 fw-normal">Registrarse</h1>

            <div class="form-floating">
                <input type="text" class="form-control ba-itjm" placeholder="Usuario">
                <label>Usuario</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control ba-itjm" placeholder="Usuario">
                <label>Nombre</label>
            </div>

            <div class="form-floating">
                <input type="text" class="form-control ba-itjm" placeholder="Usuario">
                <label>Apellido</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control ba-itjm" placeholder="Contraseña">
                <label>Contraseña</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control ba-itjm" placeholder="Repetir Contraseña">
                <label>Repetir Contraseña</label>
            </div>

            <button class="w-100 btn btn-lg  btningreso" type="submit">Registrar</button>
            <p class="mt-2 mb-3 text-muted">wild&copy;2022</p>
            <p>Registrate <a href="{{ url('/') }}">Aqui</a>.</p>
        </form>
    </main>
@endsection
