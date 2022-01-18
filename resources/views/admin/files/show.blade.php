
@extends('layouts.app')

@section('content')


    

    <div class="container py-4">
        <h1>Url actual de la pelicula</h1>
        <!-- Para que aparezca el icono de 'X' para cerrar el boton usamos el alert-dismissible -->
        <div class="alert alert-primary alert-dismissible">
            <a class="alert-link" href=" {{$value_to}}"> {{$value_to}}</a>
            <!-- Para hacer uso del JS para cerrar el mensaje de alert, pasamos unos atributos, ese boton tiene que estar dentro del div -->
            <button class="btn-close" data-bs-dismiss='alert' aria-label="Close"></button>
        </div>
    </div>
@endsection
