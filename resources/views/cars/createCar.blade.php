@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{__('Utwórz nowe autko')}}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('createCar') }}">
                            @csrf

                            <div class="form-group-row">
                                <label for="Marka" class="col-md-4 col-form-label text-md-right">{{__('Marka')}}</label>

                                <div class="col-md-6">
                                    <input id="Marka" type="text"
                                           class="form-control @error('Marka') is-invalid @enderror" name="Marka"
                                           value="{{old('Marka')}}" required autocomplete="Marka" autofocus>

                                    @error('Marka')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label for="Model" class="col-md-4 col-form-label text-md-right">{{__('Model')}}</label>

                                <div class="col-md-6">
                                    <input id="Model" type="text"
                                           class="form-control @error('Model') is-invalid @enderror" name="Model"
                                           value="{{old('Model')}}" required autocomplete="Model" autofocus>

                                    @error('Model')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label for="Rok" class="col-md-4 col-form-label text-md-right">{{__('Rok')}}</label>

                                <div class="col-md-6">
                                    <input id="Rok" type="text"
                                           class="form-control @error('Rok') is-invalid @enderror" name="Rok"
                                           value="{{old('Rok')}}" required autocomplete="Rok" autofocus>

                                    @error('Rok')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label for="Moc" class="col-md-4 col-form-label text-md-right">{{__('Moc')}}</label>

                                <div class="col-md-6">
                                    <input id="Moc" type="text"
                                           class="form-control @error('Moc') is-invalid @enderror" name="Moc"
                                           value="{{old('Moc')}}" required autocomplete="Moc" autofocus>

                                    @error('Moc')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-row">
                                <label for="skrzynia"
                                       class="col-md-4 col-form-label text-md-right">{{__('skrzynia')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('Skrzynia') is-invalid @enderror" name="Skrzynia"
                                           value="{{old('Skrzynia')}}" required autocomplete="id" autofocus>

                                    @error('skrzynia')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{__('Naped')}}</label>

                                <div class="col-md-6">
                                    <input type="text"
                                           class="form-control @error('Naped') is-invalid @enderror" name="Naped"
                                           value="{{old('Naped')}}" required autocomplete="id" autofocus>

                                    @error('Naped')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group-row">
                                <label for="miejsca"
                                       class="col-md-4 col-form-label text-md-right">{{__('Miejsca')}}</label>

                                <div class="col-md-6">
                                    <input type="number"
                                           class="form-control @error('miejsca') is-invalid @enderror" name="Miejsca"
                                           value="{{old('miejsca')}}" required autocomplete="id" autofocus>

                                    @error('miejsca')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <br/>
                            <div class="d-grid gap-3">
                                <button class="w-100 btn btn-lg btn-primary" id="rejestracja" type="submit">
                                    Dodaj auto
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
