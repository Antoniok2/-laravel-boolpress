<header>

    <div class="menu_sx">
        <img src="{{ asset('/storage/assets/img/menu.png')}}" alt="logo_menu">
        <h2>BoOlPrEsS Blog</h2>
    </div>


    <div class="auth_reg">
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