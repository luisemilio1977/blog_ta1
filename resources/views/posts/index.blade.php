@extends('layouts.app')

@section('content')
    <h1>Lista de Posts</h1>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->body }}</p>
            <p>Autor: {{ $post->user->name }}</p>
            <p>Fecha de creación: {{ $post->created_at }}</p>
            <a href="{{ route('posts.show', $post) }}">Ver más</a>
        </div>
    @endforeach

    {{ $posts->links() }}
@endsection