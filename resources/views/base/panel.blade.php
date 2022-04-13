

@extends('base/base')
@section('contenidoPrincipal')


    <nav class="navbar itjm">
        <div class="container-fluid">
            <a class="navbar-brand itjm" href="{{url('/')}}">
                <img src="{{ asset('img/logo.svg') }}" alt="" width="50" height="50" class="d-inline-block align-text-top">
                <p class="h3 itjm m-1">Instituto ha Tegnológico Jesus Maria</p>
            </a>
        </div>
    </nav>
    
@endsection
