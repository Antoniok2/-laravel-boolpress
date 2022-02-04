@extends('layouts.main-layout')
@section('content')

    <h2>Effettua Registrazione</h2>
    {{-- @auth
        <h1>{{ Auth::user() -> name }}</h1>
        <a class="btn btn-primary" href="">LOGOUT</a>
    @else
        <h1>Registrati o effettua il log-in se vuoi entrare nel mio sito</h1>
    @endauth --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">

        @method('POST')
        @csrf

        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Inserisci nome"><br>
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Inserisci email"><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Inserisci password"><br>
        <label for="password-confirmation">Conferma password</label>
        <input type="password" name="password_confirmation" placeholder="conferma password inserita"><br>
        <input type="submit" value="Registrati" class="btn btn-primary">
    </form>
    
@endsection