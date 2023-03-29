<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Hexlet Blog</title>
        @include('shared.metatags')
    </head>
    <body>
        @include('layouts.flash-message')
        <div>
            <a href="{{route('articles.index')}}">Статьи</a>
            <a href="{{route('articles.create')}}">Добавить статью</a>
        </div>
        <div class="container mt-4">
            <h1>@yield('header')</h1>
            <div>
                @yield('content')
            </div>
            <div>@yield('listOfPages')</div>
        </div>
    </body>
</html>