@extends('layouts.main-layout')
@section('content')

    <div class="contenitore">
        <div class="login_registr_create">
            <h2>Effettua registrazione</h2>

            <form action="{{ route('register') }}" method="POST">
        
                @method('POST')
                @csrf
        
                <label for="name">Nome</label><br>
                <input type="text" name="name" placeholder="Inserisci nome"><br>
                <label for="email">Email</label><br>
                <input type="email" name="email" placeholder="Inserisci email"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="Inserisci password"><br>
                <label for="password-confirmation">Conferma password</label><br>
                <input type="password" name="password_confirmation" placeholder="conferma password inserita"><br><br>
                <input type="submit" value="Registrati" class="btn btn-primary">
            </form>
        </div>


    </div>



@endsection