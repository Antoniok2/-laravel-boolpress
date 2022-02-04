<header>
    <h2>BoOlPrEsS Blog</h2>
    <div class="utente">
        @auth
            <h2>Hello {{ Auth::user() -> name }}</h2>
            <a class="btn btn-primary" href="{{ route('logout') }}">LOGOUT</a>
        @else
            <h5>
                <a href="{{ route('registration') }}">Registrati</a> |
                <a href="{{ route('login') }}">Effettua l'accesso</a>
            </h5>
        @endauth
    </div>
    
</header>