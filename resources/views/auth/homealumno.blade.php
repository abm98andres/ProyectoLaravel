@extends('layouts.plantilla')

@section('title','Home Alumno')

@section('content')
<div class="welcome-content">
    <img src="{{ asset('imagenes/alum.jpg') }}" class="welcome-image"/>
        <div class="user">
            <h3 style="color: black">Hola {{auth()->user()->tipoUsuario}}: {{auth()->user()->nombre}}</h3>
        </div>
</div>
    
@endsection