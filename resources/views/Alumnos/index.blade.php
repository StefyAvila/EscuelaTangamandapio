@extends('layouts.plantilla')

@section('title', 'Alumnos')


@section('content')

    
<br><br>
<h1><strong>Bienvenido a la Lista de Estudiantes</strong></h1>

<br>
<a href="{{route('alumnos.create')}}">Agregar Alumnos</a>
<br><br><br>
<ul>
    @foreach ($alumno as $alumno)
       <li>
         <a href="{{route('alumnos.show', $alumno)}}">{{$alumno->name}}</a>  
       </li> 
    @endforeach
</ul>


@endsection