@extends('layouts.app')


@section('content')

<div class="container">
    <div class="row">
        @foreach ($files as $file)
        <div class="col-4">
            <div class="card">
                <img src="{{asset($file->url)}}" alt="" class="img-fluid" style="width:18rem;">

                <div class="card-footer">
                    <a href="{{ route('admin.files.edit', $file->id)}}" class="btn btn-primary">Obtener URL</a>

                    <form action="{{route('admin.files.destroy', $file->id)}}" class="d-inline formulario-eliminar"
                        method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Eliminar
                        </button>
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

@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('eliminar')=='ok')
<script>
    Swal.fire(
            'Eliminado!',
            'La imagen se elimino con exito.',
            'success'
            )
</script>
@endif


<script>
    $('.formulario-eliminar').submit(function(e){
        e.preventDefault();
        
        Swal.fire({
        title: 'Esta seguro de borrar?',
        text: "La imagen eliminada no se puede recuperar!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Si, Eliminar!'
        }).then((result) => {
        if (result.isConfirmed) {
           
            this.submit();
        }
        })
     });
    // $('.formulario-eliminar').submit(function(e){
    //     e.preventDefault();
        
    //     Swal.fire({
    //     title: ' Estas seguro?',
    //     text: "Esta imagen se eliminara definitivamente",
    //     icon: 'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Si, eliminar!'
    //     cancelButtonText: 'Cancelar'

    //     }).then((result) => {
    //     if (result.isConfirmed) {
    //         this.submit();
    //     }
    //     })

    //  });
</script>
@endsection