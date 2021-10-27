@extends('layouts.app2')



@section('content')
<div class="container">
    <div class="row">
        <div class="col">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                @foreach ($files as $file)
                    <div class="card" style="width:18rem;">
                        <img src="{{asset($file->url)}}" class="card-img-top" alt="...">
                    </div>
                @endforeach
            </div>
            <br>
            {{$files->links()}}
        </div>
    </div>
</div>
@endsection