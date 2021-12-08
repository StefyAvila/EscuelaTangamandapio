@extends('layouts.plantilla')

@section('title', 'Edit')
@section('content')
    
<h1>Aqui podra Editar un Grado</h1>

<form action="{{route('grados.update', $grado)}}" method="POST">
@csrf
 @method('put')

 <br>
 <label>
     Username: 
     <br>
     <textarea name="username"  rows="2">{{old('username'), $grado->username}}</textarea>

 </label>
<br>
@error('username')
<br> 
<small>*{{$message}}</small>
@enderror

<br>
<button type="submit">Actualizar Grado</button>

</form>

@endsection