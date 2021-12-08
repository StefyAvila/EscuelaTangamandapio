@extends('layouts.plantilla')

@section('title', 'Grados' .  $grado->username)

@section('content')
    
<br>
<a href="{{route('grados.index')}}">Volver a la pagina principal</a>
<br>
<h1>Bienvenido al grado: {{$grado->username}}</h1>

<a href="{{route('grados.edit', $grado)}}">Editar Grado</a>



      <p>Los datos que se muestran aqui son privados,
      y deberia tener cuidado en como los usara.
      Una vez que presione el boton de eliminar, no podra recuperrarlo </p>
   

  <form action="{{route('grados.destroy', $grado)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Eliminar</button>


</form>
@endsection