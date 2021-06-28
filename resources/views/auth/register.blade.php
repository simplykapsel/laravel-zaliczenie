<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">



    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>
<body class="text-center">

<div class="form-signin">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Panel rejestracji</h1>

        <div class="form-floating">
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="floatingInput" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
            <label for="floatingInput">Imię</label>
            {{--            Obsługa błędu przy name--}}
            @error('name')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" id="floatingInput" value="{{ old('surname') }}" required autocomplete="surname" autofocus placeholder="surname">
            <label for="floatingInput">Nazwisko</label>
            {{--            Obsługa błędu przy surname--}}
            @error('surname')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="floatingInput" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="name@example.com">
            <label for="floatingInput">Adres mailowy</label>
            {{--            Obsługa błędu przy mailu--}}
            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="floatingPassword" required autocomplete="current-password" placeholder="Password">
            <label for="floatingPassword">Hasło</label>
            {{--            Obsługa błędu przy haśle --}}
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-floating">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            <label for="password-confirm">Potwierdź hasło</label>
            {{--            Obsługa błędu przy haśle --}}
            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="d-grid gap-3">
            <button class="w-100 btn btn-lg btn-primary" id="rejestracja" type="submit">Zarejestruj się</button>
            <a href="{{ url('/') }}" class="w-100 btn btn-lg btn-danger" type="button">Powrót</a>
            <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
        </div>
    </form>
</div>



</body>
</html>
