@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @foreach ($files as $file)
        <div class="col-4">
            <div class="card">
                {{-- <img src="{{asset($file->url)}}" alt="" class="img-fluid" style="width:18rem;"> --}}

                <img src="https://pixabay.com/static/img/logo_square.png" alt="">
                <div class="card-footer">
                    <a href="" class="btn btn-primary">Editar</a>
                    <form action="" class="d-inline">
                        <a type="submit" class="btn btn-danger" href="#" role="button">Eliminar</a>
                    </form>
                </div>
            </div>

        </div>

        @endforeach
        <br>
        <div class="col-12">
            {{$files->links()}}

        </div>
    </div>

</div>


@endsection