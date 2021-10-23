<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imagenes</title>

    {{-- le decimos que se conecte al archivo css de bootstrap --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <!-- Styles -->
    {{-- estilos propios de livewire --}}
    {{-- @livewireStyles --}}

</head>

<body>

    @yield('content')


    {{-- scripts propios de livewire --}}
    {{-- @livewireScripts --}}
</body>

</html>