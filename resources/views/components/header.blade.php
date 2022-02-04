<header>
    <h1>MENU</h1>
    <div class="utente">
        @auth
            <h1>Benvenuto {{ Auth::user() -> name }}</h1>
            <a class="btn btn-primary" href="{{ route('logout') }}">LOGOUT</a>
        @else
            <h5>
                <a href="{{ route('registration') }}">Registrati</a> |
                <a href="{{ route('login') }}">Effettua l'accesso</a>
            </h5>
        @endauth
    </div>
    
</header>