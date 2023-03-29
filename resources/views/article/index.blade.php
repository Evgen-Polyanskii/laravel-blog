@extends('layouts.app')

@section('header', 'Список статей')

@section('content')
    @foreach($articles as $article)
        <a href="{{ route('articles.show', [ 'id' => $article->id ]) }}"><h2>{{$article->name}}</h2></a>
        <div>{{Str::limit($article->body, 200)}}</div>
        <div>
            <a href="{{ route('articles.edit', [ 'id' => $article->id ]) }}">Изменить</a>
            <a 
                href="{{ route('articles.destroy', [ 'id' => $article->id ]) }}" 
                rel="nofollow"
                data-method="delete"
            >Удалить</a>
        </div>
    @endforeach
@endsection

@section('listOfPages', $articles->links())
