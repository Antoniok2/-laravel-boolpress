@extends('layouts.main-layout')
@section('content')

    <example-component></example-component>
    @auth
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
    @else
        <h5>
            Per vedere i contenuti effettua l'accesso o registrati
            <a href="{{ route('registration') }}">Registrati</a> |
            <a href="{{ route('login') }}">Effettua l'accesso</a>
        </h5>
    @endauth
@endsection