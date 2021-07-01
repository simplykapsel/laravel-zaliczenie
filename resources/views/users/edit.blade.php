@extends('layouts.mainlayout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Powrót</a>
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

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Imię:</strong>
                <input class="form-control" name="name" value="{{$user->name}}" placeholder="Imię" required autocomplete="name" autofocus>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nazwisko:</strong>
                <input class="form-control" name="surname" value="{{$user->surname}}" placeholder="Nazwisko" required autocomplete="surname" autofocus>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Mail:</strong>
                <input type="email" class="form-control" name="email" value="{{$user->email}}" placeholder="Mail" required autocomplete="email" autofocus>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Hasło:</strong>
                <input type="password" class="form-control" name="password" placeholder="Hasło" required autocomplete="password" autofocus>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rola:</strong>
                <select class="form-control" id="role" name="role" required autocomplete="role" autofocus>
                    <option value="user" @if($user->role == 'user') selected @endif>Użytkownik</option>
                    <option value="admin" @if($user->role == 'admin') selected @endif>Admin</option>
                </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Zapisz</button>
        </div>
    </form>
    </div>
@endsection
