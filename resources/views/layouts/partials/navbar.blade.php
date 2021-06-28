<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg src="/public/" class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 text-secondary">Strona główna</a></li>
                <li><a href="{{ url('/oferta') }}" class="nav-link px-2 text-white">Oferta</a></li>
{{--                <li><a href="{{ url('/kontakt') }}" class="nav-link px-2 text-white">Kontakt</a></li>--}}
                <li><a href="{{ url('/faq') }}" class="nav-link px-2 text-white">FAQ</a></li>
                <li><a href="{{ url('/o_nas') }}" class="nav-link px-2 text-white">O nas</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Szukaj..." aria-label="Search">
            </form>
            {{--            Stare logowanie--}}
            {{--            @if (Route::has('login'))--}}
            {{--                    @auth--}}
            {{--            <div class="text-end">--}}
            {{--                    @else--}}
            {{--                <button type="button" href="{{ route('login') }}" class="btn btn-outline-light me-2">Login</button>--}}
            {{--                    @if (Route::has('register'))--}}
            {{--                <button type="button" href="{{ route('register') }}" class="btn btn-warning">Sign-up</button>--}}
            {{--                    @endif--}}
            {{--                @endauth--}}
            {{--            </div>--}}
            {{--                @endif--}}
            @if (Route::has('login'))
                <div class="text-end">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-outline-light me-2">Profil</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-light me-2">Zaloguj się</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-warning">Zarejestruj się</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</header>

