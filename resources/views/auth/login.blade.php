@extends('base/base')

@section( 'title','Ingreso')
@section( 'contenidoEnBody')
<!--FORMULARIO DE INGRESO-->
<div class=" m-0  vh-100 row  justify-content-center align-items-center">
        <main class="form-signin text-center">
                <form >
                        <img class="mb-4" src="{{ asset('img/logotexto.svg') }}" alt="" width="200" height="200">
                        <h1 class="h4 mb-3 fw-normal">Iniciar sesión</h1>
        
                        <div class="form-floating">
                                <input type="text" class="form-control bg-c-bla" id="floatingInput" placeholder="codigo">
                                <label for="floatingInput">Codigo De Estudiante</label>
                        </div>
                        <div class="form-floating">
                                <input type="password" class="form-control bg-c-bla" id="floatingPassword" placeholder="contraseña">
                                <label for="floatingPassword">Contraseña</label>
                        </div>
        
                        <button type="submit"class="w-100 btn btn-lg bg-c-pri co-se" href="{{ route('principal') }}"> INGRESAR</button>
                        <p class="mt-4 mb-3 text-muted">&copy; 2022</p>
                        <p>Registrate <a href="{{ route('principal') }}">Aqui</a>.</p>
                        
                </form>
        </main>
</div>
<!--FORMULARIO DE INGRESO-->
@endsection