@extends('base/base')

@section('contenidoPrincipal')

<main class="form-signin text-center ba-itjm">
        <form >
                <img class="mb-4" src="{{ asset('img/logo2.svg') }}" alt="" width="200" height="200">
                <h1 class="h4 mb-3 fw-normal">Iniciar Seccion</h1>

                <div class="form-floating">
                        <input type="email" class="form-control ba-itjm" id="floatingInput" placeholder="name@ejemplo.com">
                        <label for="floatingInput">Usuario</label>
                </div>
                <div class="form-floating">
                        <input type="password" class="form-control ba-itjm" id="floatingPassword" placeholder="Contraseña">
                        <label for="floatingPassword">Contraseña</label>
                </div>

                <button class="w-100 btn btn-lg  btningreso" href="/panel"> INGRESAR</button>
                <p class="mt-4 mb-3 text-muted">&copy; 2022</p>
                <p>Registrate <a href="{{url('/registro')}}">Aqui</a>.</p>
                
        </form>
</main>

@endsection