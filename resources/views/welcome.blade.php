@extends('base/base')

@section('contenidoPrincipal')

<main class="form-signin text-center">
        <form>
                <p>hola  git</p>
                <img class="mb-4" src="{{ asset('img/logo2.svg') }}" alt="" width="200" height="200">
                <h1 class="h3 mb-3 fw-normal">Bienvenido</h1>

                <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@ejemplo.com">
                        <label for="floatingInput">Correo Electronico</label>
                </div>
                <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                        <label for="floatingPassword">Contraseña</label>
                </div>


                <button class="w-100 btn btn-lg  btningreso" type="submit">INGRESAR</button>
                <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
        </form>
</main>

@endsection