@extends('layouts.app')
@section('header', 'Статья')
@section('content')
        <h2>{{$article->name}}</h2>
        <div>{{$article->body}}</div>
@endsection