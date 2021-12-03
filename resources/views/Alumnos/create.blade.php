@extends('layouts.plantilla')

@section('title')

@section('content')
<h1>Agregar alumnos</h1>

<form action="{{route('alumnos.store')}}" method="POST">
@csrf

<label>
    <br>
    Nombre:
    <br>
    <input type="text" name="name" value="{{old('name')}}">
</label>
@error('name')
<br>
<small>*{{$message}}</small>
<br>
@enderror

<br>
<label>
   <br>
   Email: 
   <br>
   <textarea name="address" rows="3">{{old('email')}}</textarea>
<br>
</label>
@error('email')
    <br>
     <small>*{{$message}}</small>
@enderror

<br>
<label>
    Address: 
    <br>
    <textarea name="address" rows="4">{{old('direccion')}}</textarea>
</label>
@error('address')
<br>
<small>*{{$message}}</small>
@enderror
<br>
<br>
<button type="submit">Enviar Alumno</button>


</form>
    

    
@endsection