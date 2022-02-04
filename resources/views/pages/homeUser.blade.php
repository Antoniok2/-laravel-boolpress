@extends('layouts.main-layout')
@section('content')

    <div class="contenitore">
        <h1>Listato Post</h1>
        <ul>
            @foreach ($posts as $post)
                <li>
                    Titolo: {{ $post -> title }} - Autore: {{ $post -> author }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection