@extends('layouts.app')
@section('header', 'Список статей')
@section('content')
    <a href="{{route('articles.create')}}">Создать статью</a>
    @foreach ($articles as $article)
        <h2><a href="{{route('articles.show', $article)}}">{{$article->name}}</a></h2>
        <div>{{$article->body}}</div>
    @endforeach
@endsection

@section('paginate')
{{$articles->links()}}
@endsection
