@extends('layouts.plantilla')

@section('title', 'Estudiante')

@section('content')
<h1>Detalles de {{$alumno->nombre}} </h1>
<br><br>
<a href="{{route('alumnos.index')}}">Volver a lista de Estudiantes</a>
<br>
<a href="{{route('alumnos.edit', $alumno)}}">Editar Alumno</a>
<h1>Bienvenido a detalles del estudiante: {{$alumno->name}}</h1>
<br>
<p><strong>Biografia: </strong>{{$alumno->biografia}}</p>
<br>
<p>{{$alumno->address}}</p>

<form action="{{route('alumnos.destroy', $alumno)}}" method="POST">
@csrf
@method('delete')
<button type="submit">Eliminar</button>
</form>

@endsection