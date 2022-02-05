@extends('layouts.main-layout')
@section('content')

    <div class="contenitore">
        <div class="login_registr_create">
            <h2>Effettua Login</h2>

            <form action="{{ route('login') }}" method="POST">
        
                @method('POST')
                @csrf
        
                <label for="email">E-mail</label><br>
                <input type="text" name="email" placeholder="Inserisci email"> <br>
                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="Inserisci password"> <br>
                <br>
                <input class="btn btn-primary" type="submit" value="LOGIN">
        
            </form>
        </div>

    </div>


@endsection