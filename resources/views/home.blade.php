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
                <div class="estudiantes">
                    <i class="fa-solid fa-graduation-cap logo-estudent"></i>
                    <a href="www.google.com" class="estu">Estudiante</a>
                </div>
                <div class="administrativo">
                    <i class="fa-solid fa-user-gear logo-estudent"></i>
                    <a href="{{ route('login') }}" class="admi">Administrativo</a>
                </div>
            </div>
           
        </div>
    @include('base.footer')
   
    
@endsection
