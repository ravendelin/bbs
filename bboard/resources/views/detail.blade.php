@extends('layouts.app')

@section('title', $bb->title)
@section('content')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>{{ $bb->price }} USD</p>
    <p>Author: {{ $bb->user->name }}</p>
    <p><a class="page-link" href="{{ route('index') }}">to main page >></a></p>
@endsection('content')
