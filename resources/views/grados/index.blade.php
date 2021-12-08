@extends('layouts.plantilla')

@section('title', 'Grados')

@section('content')

<br><br>
  <h1><strong>Bienvenido a la pagina principal de Grados</strong></h1>

  <br><br>
  <a href="{{route('grados.create')}}">Crear un Grado</a>


  <br><br>
  <ul>
      @foreach ($grado as $grado)
      <li>
          <a href="{{route('grados.show', $grado)}}">{{$grado->username}}</a>
      </li>
          
      @endforeach
  </ul>
    


  
@endsection