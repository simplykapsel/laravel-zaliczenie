@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Dodaj nowe auto</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('cars.index') }}">Powrót</a>
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

        <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID użytkownika:</strong>
                        <input type="text" name="user_id" class="form-control" placeholder="ID Usera" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Marka:</strong>
                        <input class="form-control" name="marka" placeholder="Nazwa marki" required autocomplete="marka"
                               autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Model:</strong>
                        <input class="form-control" name="model" placeholder="Nazwa modelu" required
                               autocomplete="model" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rok:</strong>
                        <input type="number" min="1900" max="2021" class="form-control" name="rok" placeholder="Rok"
                               required autocomplete="rok" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Moc:</strong>
                        <input type="number" class="form-control" name="moc" placeholder="Moc" required
                               autocomplete="moc" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Silnik:</strong>
                        <select class="form-control" id="rodzaj" name="rodzaj" required autocomplete="rodzaj" autofocus>
                            <option value="Diesel">Diesel</option>
                            <option value="Benzyna">Benzyna</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Skrzynia biegów:</strong>
                        <select class="form-control" id="skrzynia" name="skrzynia" required autocomplete="skrzynia"
                                autofocus>
                            <option value="Automatyczna">Automatyczna</option>
                            <option value="Manualna">Manualna</option>
                            <option value="Półautomatyczna">Półautomatyczna</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Typ napędu:</strong>
                        <select class="form-control" id="naped" name="naped" required autocomplete="naped" autofocus>
                            <option value="FWD">FWD</option>
                            <option value="RWD">RWD</option>
                            <option value="AWD">AWD</option>
                            <option value="4WD (4x4)">4WD (4x4)</option>
                            <option value="Hybrydowy">Hybrydowy</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Miejsca:</strong>
                        <input type="number" class="form-control" name="miejsca" placeholder="Ilość miejsc">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Zdjęcie:</strong>
                        <input type="file" class="form-control" name="file" placeholder="Zdjecie auta" required>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Dodaj auto</button>
                </div>
            </div>
        </form>
@endsection
