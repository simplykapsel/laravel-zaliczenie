@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edycja swoje dane</h2>
                </div>
                <div class="pull-right">
                    @if(Auth::user()->role=='admin')
                        <a class="btn btn-primary" href="{{ route('admin') }}">Powrót</a>
                    @elseif(Auth::user()->role=='user')
                        <a class="btn btn-primary" href="{{ route('user') }}">Powrót</a>
                        @endif
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('editProfileUpdate') }}" method="POST">
            @csrf

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imię:</strong>
                    <input class="form-control" name="name" value="{{$user->name}}" placeholder="Imię" required
                           autocomplete="name" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nazwisko:</strong>
                    <input class="form-control" name="surname" value="{{$user->surname}}" placeholder="Nazwisko"
                           required autocomplete="surname" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mail:</strong>
                    <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Mail"
                           required autocomplete="email" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Hasło:</strong>
                    <input type="password" class="form-control" name="password" value=""
                           placeholder="Hasło" required autocomplete="password" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Zapisz</button>
            </div>
        </form>
    </div>

@endsection
