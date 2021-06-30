@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Utwórz nowego uzytkownika')}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('createUser') }}">
                            @csrf
                            <div class="form-group-row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Imię')}}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                           class="form-control @error('name') is-invalid @enderror" name="name"
                                           value="{{old('name')}}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="surname"
                                       class="col-md-4 col-form-label text-md-right">{{__('Nazwisko')}}</label>

                                <div class="col-md-6">
                                    <input id="surname" type="text"
                                           class="form-control @error('surname') is-invalid @enderror" name="surname"
                                           value="{{old('surname')}}" required autocomplete="surname" autofocus>

                                    @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{__('Mail')}}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{old('email')}}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="surname"
                                       class="col-md-4 col-form-label text-md-right">{{__('Hasło')}}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           value="{{old('password')}}" required autocomplete="password" autofocus>

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{__('Role')}}</label>

                                <div class="col-md-6">
                                    <input list="role"
                                           class="form-control @error('role') is-invalid @enderror" name="role"
                                           value="{{old('role')}}" list="listarole" required autocomplete="role" autofocus pattern="admin|user">
                                    <datalist id="role">
                                        <option value="admin">admin</option>
                                        <option value="user">user</option>
                                    </datalist>

                                    @error('role')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <br/>
                            <div class="d-grid gap-3">
                                <button class="w-100 btn btn-lg btn-primary" id="rejestracja" type="submit">
                                    Dodaj użytkownika
                                </button>
                                <a href="{{ url('/admin') }}" class="w-100 btn btn-lg btn-danger"
                                   type="button">Powrót</a>
                                <p class="mt-5 mb-3 text-muted">&copy; 2021</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
