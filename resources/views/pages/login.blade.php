@extends('layouts.main-layout')
@section('content')

    <h2>Effettua Login</h2>

    <form action="{{ route('login') }}" method="POST">

        @method('POST')
        @csrf

        <label for="email">E-mail</label>
        <input type="text" name="email"> <br>
        <label for="password">Password</label>
        <input type="password" name="password"> <br>
        <br>
        <input class="btn btn-primary" type="submit" value="LOGIN">

    </form>

@endsection