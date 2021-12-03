@extends('layouts.plantilla')

@section('title', 'Editar Profesores')

<h1>Desea editar la informacion de un profesor?</h1>
<h4>Rellene el formulario</h4>
@section('content')
    
<form action="{{route('profesores.update', $profesore)}}" method="POST">


@csrf
@method('put')

<label>
    <br>
    Nombre:
    <br><br>
    <input type="text" name="name" value="{{old('name'), $profesore->name}}">
</label>
@error('name')
    <small>*{{$message}}</small>
@enderror

<label>
    <br>
    Biografia:
    <br><br>
    <textarea type="text" name="biografia" rows="10">{{old('biografia'), $profesore->biografia}}</textarea>
</label>
@error('biografia')
    <small>*{{$message}}</small>
@enderror

<label>
    <br>
    Telefono: 
    <br>
    <textarea name="telefono"  rows="10">{{old('telefono', $profesore->telefono)}}</textarea>
</label>
@error('telefono')
    <small>*{{$message}}</small>
@enderror

<label>
    <br>
    Direccion: 
    <br>
    <textarea name="direccion"  rows="10">{{old('direccion', $profesore->direccion)}}</textarea>
</label>
@error('direccion')
    <small>*{{$message}}</small>
@enderror

<br> <br>

<button type="submit">Actualizar Profesor</button>



</form>
   
    
@endsection