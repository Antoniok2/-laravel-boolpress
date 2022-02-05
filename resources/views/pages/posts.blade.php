@extends('layouts.main-layout')
@section('content')

    @auth
        <div class="contenitore">
            <h1>Listato Post</h1>
            <span><a href="{{ route('create') }}">Crea nuovo post</a></span>
            <div class="posts">
                @foreach ($posts as $post)
                    <div class="post">
                        <h4>{{ $post -> title }}</h4>
                        <h5>{{ $post -> author }}</h5>
                        <span>{{ $post -> date }}</span>
                        <p>{{ $post -> description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <h5>
            Per vedere i contenuti <a href="{{ route('login') }}">Effettua l'accesso</a> o <a href="{{ route('registration') }}">Registrati!</a>
        </h5>
    @endauth
@endsection