@extends('layouts.plantilla')

@section('title', 'Profesores')

@section('content')
    <h3>Agregue Profesores a la escuela</h3>
    <form action="{{route('profesores.store')}}" method="POST">
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
     Biografia: 
     <br>
     <textarea name="biografia" rows="5">{{old('biografia')}}</textarea>
    </label>
    <br>
    @error('biografia')
        <br>
        <small>*{{$message}}</small>
    @enderror

    <br>
    <label>
        <br>
        Telefono: 
        <textarea name="telefono"  rows="1">{{old('telefono')}}</textarea>
        <br>
    </label>
    @error('telefono')
        <br>
        <small>*{{$message}}</small>
    @enderror
    <br>
    <label>
        <label>
            <br>
            Grado asignado: 
            <textarea name="grado_id"  rows="1">{{old('grado_id')}}</textarea>
            <br>
        </label>
        @error('grado_id')
            <br>
            <small>*{{$message}}</small>
            <br>
        @enderror
    
        
    
    <button type="submit">Enviar Formulario</button>
    
    
    
    </form>
    
@endsection