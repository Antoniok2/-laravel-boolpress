@extends('layouts.main-layout')
@section('content')

@auth
<div class="login_registr_create">
    <h2>Modifica post</h2>

    <form action="" method="POST">

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
        <label for="category">Categoria</label>
        <select name="category">
            @foreach ($categories as $category)
                <option value="{{ $category -> id }}">{{ $category -> name }}</option>
            @endforeach
        </select><br><br>
        <h4>Relazioni</h4>
        @foreach ($reactions as $reaction)
            <input type="checkbox" name="reactions[]" value="{{ $reaction -> id }}"> {{ $reaction -> name }}
        @endforeach <br>
        <input type="submit" value="Crea">

    </form>
</div>
@endauth
</div>
    
@endsection