<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Titre du site  -->
    <title>Titre du site à changer</title>

    <!-- Favicon  -->
    <link rel="icon" href="#">

    <!-- Feuille de style -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<!-- Menu -->
@include('layouts.menu')
@yield('menu')

<!-- Header -->
@include('layouts.header')
@yield('header')

<!-- Contenu du site -->
@yield('content')

<!-- Footer -->
@include('layouts.footer')
@yield('footer')

<!-- Scripts -->
@include('layouts.scripts')
@yield('scripts')

</body>
</html>
