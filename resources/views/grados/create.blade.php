@extends('layouts.plantilla')


@section('title', 'Grados')

@section('content')
<h1>Agregar Grados</h1>

<form action="{{route('grados.store')}}" method="POST">
@csrf

<label>
  <br>
  Username: 
  <textarea name="username"  rows="2">{{old('username')}}</textarea>
</label>
@error('username')
<br>
<small>*{{$message}}</small>  
@enderror

<button type="submit">Crear Grado</button>



</form>
    

    
@endsection