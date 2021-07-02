@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Edit Post</h2>
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

        <form action="{{ route('cars.update',$car->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            @method('PUT')
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>ID użytkownika:</strong>
                        <input type="text" value="{{$car->user_id}}" name="user_id" class="form-control"
                               placeholder="ID Usera" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Marka:</strong>
                        <input class="form-control" value="{{$car->marka}}" name="marka" placeholder="Nazwa marki"
                               required autocomplete="marka" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Model:</strong>
                        <input class="form-control" value="{{$car->model}}" name="model" placeholder="Nazwa modelu"
                               required autocomplete="model" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Rok:</strong>
                        <input type="number" min="1900" max="2021" value="{{$car->rok}}" class="form-control" name="rok"
                               placeholder="Rok" required autocomplete="rok" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Moc:</strong>
                        <input type="number" value="{{$car->moc}}" class="form-control" name="moc" placeholder="Moc"
                               required autocomplete="moc" autofocus>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Silnik:</strong>
                        <select class="form-control" id="rodzaj" name="rodzaj" required autocomplete="rodzaj" autofocus>
                            <option value="Diesel" @if($car->rodzaj == 'Diesel') selected @endif>Diesel</option>
                            <option value="Benzyna" @if($car->rodzaj == 'Benzyna') selected @endif>Benzyna</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Skrzynia biegów:</strong>
                        <select class="form-control" id="skrzynia" name="skrzynia" required autocomplete="skrzynia"
                                autofocus>
                            <option value="Automatyczna" @if($car->skrzynia == 'Automatyczna') selected @endif>
                                Automatyczna
                            </option>
                            <option value="Manualna" @if($car->skrzynia == 'Manualna') selected @endif>Manualna</option>
                            <option value="Półautomatyczna" @if($car->skrzynia == 'Półautomatyczna') selected @endif>
                                Półautomatyczna
                            </option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Typ napędu:</strong>
                        <select class="form-control" id="naped" name="naped" required autocomplete="naped" autofocus>
                            <option value="FWD" @if($car->naped == 'FWD') selected @endif>FWD</option>
                            <option value="RWD" @if($car->naped == 'RWD') selected @endif>RWD</option>
                            <option value="AWD" @if($car->naped == 'AWD') selected @endif>AWD</option>
                            <option value="4WD (4x4)" @if($car->naped == '4WD (4x4)') selected @endif>4WD (4x4)</option>
                            <option value="Hybrydowy" @if($car->naped == 'Hybrydowy') selected @endif>Hybrydowy</option>
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Miejsca:</strong>
                        <input type="number" class="form-control" name="miejsca" value="{{$car->miejsca}}"
                               placeholder="Ilość miejsc">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Zdjęcie:</strong>
                        <input type="file" class="form-control" id="file_path" name="file_path" placeholder="Zdjecie auta" required>
                        <img class="rounded mx-auto d-block" src="{{ asset('/uploads/addedCars/'.$car->file_path) }}" width="25%" height="25%">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Zapisz</button>
                </div>
            </div>
        </form>
    </div>
@endsection
