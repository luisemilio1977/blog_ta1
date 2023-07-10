@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <p>Autor: {{ $post->user->name }}</p>
    <p>Fecha de creación: {{ $post->created_at }}</p>

    @auth
        @if (Auth::user()->id === $post->user_id)
            <a href="{{ route('posts.edit', $post) }}">Editar</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        @endif
    @endauth
@endsection