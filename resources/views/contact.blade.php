@extends('layout')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
    <body>
        @section('content')
        Kapcsolati űrlap megjeleníté
        <form action="" method="get">
            <label for="name">Név</label>
            <input type="text" name="name" id="name">
            <button>Mentés</button>
        </form>
        @endsection
        <h1>Ez egy aloldal</h1>
    </body>
</html>
