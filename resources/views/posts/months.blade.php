@extends('template') 

@section('content')
    <h1>Meses con Publicaciones</h1>

    <ul>
        @foreach ($months as $month)
            <li><a href="{{ route('posts.month', $month) }}">{{ $month }}</a></li>
        @endforeach
    </ul>
@endsection