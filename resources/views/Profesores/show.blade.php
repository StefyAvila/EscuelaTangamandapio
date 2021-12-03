@extends('layouts.plantilla')

@section('title', 'Profesores' . $profesore->name)

@section('content')

<a href="{{route('profesores.index')}}">Volver a Administracion</a>
<br>
<a href="{{route('profesores.edit', $profesore)}}">Editar Profesores</a>
<h1>Bienvenido al perfil del maestro: {{$profesore->name}}</h1>
<br>
<p><strong>biografia:</strong>{{$profesore->biografia}}</p>
<br>


<form action="{{route('profesores.destroy', $profesore)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger">Eliminar</button>
</form>

    
@endsection