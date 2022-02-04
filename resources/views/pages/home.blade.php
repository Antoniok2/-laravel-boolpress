@extends('layouts.main-layout')
@section('content')

    {{-- @guest
        <h2>Effettua Registrazione</h2>

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

        <h2>Login</h2>

    @endguest --}}


    
@endsection