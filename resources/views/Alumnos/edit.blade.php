@extends('layouts.plantilla')

@section('title')

@section('content')
    <h1>Para editar la informacion de un alumno llene el formulario</h1>
    <form action="{{route('alumnos.update', $alumno)}}" method="POST">
    
        @csrf
        @method('put')

        <br><br>
        <label>
            <br>
            Nombre: 
            <br>
            <input type="text" name="name" value="{{old('name'), $alumno->name}}">
            <br>
        </label>
        <br>
        @error('name')
            <small>*{{$message}}</small>
        @enderror


        <br><br>
        <label>
            Email: 
            <br>
            <textarea name="email"  rows="13">{{old('email'), $alumno->email }}</textarea>
        </label>
        <br>
        @error('email')
            <br>
            <small>*{{$message}}</small>
        @enderror

        <br><br>
        <label>
            Address: 
            <br>
            <textarea name="address"  rows="5">{{old('address'), $alumno->address }}</textarea>
            <br>
        </label>

        <br>
        @error('address')
        <br>
        <small>*{{$message}}</small>
            
        @enderror

        <br>
        <button type="submit">Actualizar Alumno</button>
    
    
    
    
    
    
    
    </form>
@endsection