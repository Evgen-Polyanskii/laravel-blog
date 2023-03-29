@extends('layouts.app')

@section('header', 'Список статей')

@section('content')
    @foreach($articles as $article)
        <a href="{{ route('articles.show', $article) }}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
        <div>
            <a href="{{ route('articles.edit', $article) }}">Изменить</a>
            <a 
                href="{{ route('articles.destroy', $article) }}" 
                rel="nofollow"
                data-method="delete"
                data-confirm="Вы уверены?"
            >Удалить</a>
        </div>
    @endforeach
@endsection

@section('listOfPages', $articles->links())
