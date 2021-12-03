@extends('layouts.plantilla')

@section('title', 'Profesores')
    @section('content')
        
    <br>
    <h1><strong>Bienvenido a administracion de Profesores</strong></h1>

    <br><br>
    <a href="{{route('profesores.create')}}">Agregar Profesor</a>
    <br><br>
    <ul>
        @foreach ($profesore as $profesore)
        <li>
            <a href="{{route('profesores.show', $profesore)}}">{{$profesore->name}}</a>
        <br>
        </li>
            
        @endforeach
    </ul>
@endsection