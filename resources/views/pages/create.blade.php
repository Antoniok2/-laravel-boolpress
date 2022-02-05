@extends('layouts.main-layout')
@section('content')

    <div class="contenitore">
        @auth
            <div class="login_registr_create">
                <h2>Crea nuovo post</h2>

                <form action="{{ route('store') }}" method="POST">
            
                    @method('POST')
                    @csrf

                    <label for="title">Titolo Post</label><br>
                    <input type="text" name="title" placeholder="Inserisci il titolo"><br>
                    <label for="author">Autore Post</label><br>
                    <input type="text" name="author" placeholder="Inserisci Autore"><br>
                    <label for="description">Inserisci testo post</label><br>
                    <input type="text" name="description" placeholder="Inserisci testo"><br>
                    <label for="date">Inserisci la data</label><br>
                    <input type="date" name="date"><br><br>
                    <input type="submit" value="Crea">
            
                </form>
            </div>
        @endauth
    </div>



@endsection