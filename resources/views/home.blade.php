@section('title', 'home')
@extends('base/base')
@section('contenidoEnBody')

    <div class="d-flex justify-content-center vh-100 flex-column home">
        <div class="d-flex justify-content-center">
            <img class=" pngboxshadow" src="{{ asset('img/logotexto.svg') }}" alt="" width="180" height="180">
        </div>
        <div class="d-flex justify-content-center p-0 m-0">
            <p class="h4">¿Elija tu tipo de cuenta?</p>
        </div>
        <div class="d-flex justify-content-center home">
        
            <a href="{{ route('login') }}" class="admi">
                <div class="admi estudiante">
                    <i class="fa-solid fa-graduation-cap logo-login"></i>
                    <span>Estudiante</span>
                </div>
            </a>

            <a href="{{ route('loginAdmin') }}" class="admi">
                <div class="admi administrativo">
                    <i class="fa-solid fa-user-gear logo-login"></i>
                    <span>Administrativo</span>
                </div>
            </a>

        </div>

    </div>



@endsection
