@extends('layouts.master')

@section('content')
    <br>
    <div class="row">
    <div class="col-sm-4">
      <img src="{{$miPeli['poster']}}" style="height:300px"/>
    </div>
    <div class="col-sm-8">
        <h3>Titulo: {{$miPeli['title']}}</h3>
        <h4>Director: {{$miPeli['director']}}</h4>
        <p>Resumen: {{$miPeli['synopsis']}}</p>
        @if($miPeli['rented'])
          <p>Estado: Película actualmente alquilada</p>
          <button type="button" class="btn btn-danger">Devolver pelicula</button>
          <button type="button" class="btn btn-warning" onclick="window.location='{{ url('/catalog/edit/' . $miPeli['id'] ) }}'">Editar pelicula</button>
          <button type="button" class="btn btn-default" onclick="window.location='{{ url('catalog') }}'">Volver al listado</button>
        @else
          <p>Estado: Pelicula disponible</p>
          <button type="button" class="btn btn-info">Alquilar pelicula</button>
          <button type="button" class="btn btn-warning" onclick="window.location='{{ url('/catalog/edit/' . $miPeli['id'] ) }}'">Editar pelicula</button>
          <button type="button" class="btn btn-default" onclick="window.location='{{ url('catalog') }}'">Volver al listado</button>
        @endif
    </div>
    <div class="col-sm-12">
    <h3>Trailer:</h3>
      <iframe width="100%" height="500" src="{{$miPeli['trailer']}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>
@stop
