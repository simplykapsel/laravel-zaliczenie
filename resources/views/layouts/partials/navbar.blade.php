<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{asset("/assets/blue.png")}}" class="bi me-2" width="80" height="64" role="img"
                     aria-label="Bootstrap" alt="Logo">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 text-secondary">Strona główna</a></li>
                <li><a href="{{ url('/oferta') }}" class="nav-link px-2 text-white">Oferta</a></li>
                <li><a href="{{ url('/faq') }}" class="nav-link px-2 text-white">FAQ</a></li>
                <li><a href="{{ url('/o_nas') }}" class="nav-link px-2 text-white">O nas</a></li>
            </ul>
            @if (Route::has('login'))
                <div class="text-end">
                    @auth
                        @if(Auth::user()->role=='admin')
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="{{ url('/admin') }}">Mój profil</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/editProfile') }}">Edytuj profil</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/users') }}">Zarządzaj użytkownikami</a>
                                    </li>
                                    <li><a class="dropdown-item" href="{{ url('/cars') }}">Zarządzaj autami</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Wyloguj się') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @elseif(Auth::user()->role=='user')
                            <div class="dropdown">
                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                                    <li><a class="dropdown-item active" href="{{ url('/user') }}">Mój profil</a></li>
                                    <li><a class="dropdown-item" href="{{ url('/editProfile') }}">Edytuj profil</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Wyloguj się') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endif
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

