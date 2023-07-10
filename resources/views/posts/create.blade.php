@extends('template') 

@section('content')
    <h1>Crear Post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Título:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}">
        </div>
        <div>
            <label for="body">Contenido:</label>
            <textarea name="body" id="body">{{ old('body') }}</textarea>
        </div>
        <button type="submit">Crear</button>
    </form>
@endsection