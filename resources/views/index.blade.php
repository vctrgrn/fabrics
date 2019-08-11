<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Titre du site à changer</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">

    <!-- Feuille de style -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/homepage.css')}}">
</head>
<body>
<div class="container-fluid">
    <a href="">
        <div class="split left">
            <h2>Fabrics</h2>
        </div>
    </a>
    <a href="">
        <div class="split right">
            <h2>Fabrics Events</h2>
        </div>
    </a>
</div>
<script src="{{asset('js/split-home.js')}}"></script>
</body>
</html>
