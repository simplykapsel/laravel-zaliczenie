@extends('layouts.mainlayout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 p-5">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Zalogowany poprawnie!') }}<br>
                        Witaj <b>{{Auth::user()->name}} {{Auth::user()->surname}}</b> na twoim profilu!<br>
                        <p>
                        <h3>Lista aut należacych do Ciebie:</h3>
                        </p>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-dark">
                                <tr>
                                    <th>Marka</th>
                                    <th>Model</th>
                                    <th>Rok</th>
                                    <th>Moc</th>
                                    <th>Rodzaj silnika</th>
                                    <th>Rodzaj skrzynia</th>
                                    <th>Rodzaj napędu</th>
                                    <th>Ilość miejsc</th>
                                    <th>Zdjęcie poglądowe</th>
                                    <th>Zwrót auta</th>
                                </tr>
                                </thead>
                                @foreach ($cars as $car)
                                    <tr>
                                        <td>{{ $car->marka }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->rok }}</td>
                                        <td>{{ $car->moc }}</td>
                                        <td>{{ $car->rodzaj }}</td>
                                        <td>{{ $car->skrzynia }}</td>
                                        <td>{{ $car->naped }}</td>
                                        <td>{{ $car->miejsca }}</td>
                                        <td><img width="100%" height="auto"
                                                 src="{{ asset('uploads/addedCars/'.$car->file_path) }}"></td>
                                        <td>
                                            <form class="d-inline" action="{{ route('returnCar',$car->id) }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" id="id" value="{{$car->id}}">
                                                <input type="hidden" name="user_id" id="user_id">
                                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
