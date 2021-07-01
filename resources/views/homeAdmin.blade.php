@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Zalogowany!') }}
                        Witaj na stronie administracyjnej!<br>
                        Rola: {{Auth::user()->role}}
                        <a href="{{ route('users.index') }}" class="btn btn-warning">userzy</a>
                        <a href="{{ route('cars.index') }}" class="btn btn-warning">autka</a>

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th>ID Auta</th>
                                        <th>ID Użytkownika</th>
                                        <th>Marka</th>
                                        <th>Model</th>
                                        <th>Rok</th>
                                        <th>Moc</th>
                                        <th>Rodzaj silnika</th>
                                        <th>Rodzaj skrzynia</th>
                                        <th>Rodzaj napędu</th>
                                        <th>Ilość miejsc</th>
                                        <th>Akcje</th>
                                    </tr>
                                    </thead>
                                    @foreach ($cars as $car)
                                        <tr>
                                            <td>{{ $car->id }}</td>
                                            <td>{{ $car->user_id }}</td>
                                            <td>{{ $car->marka }}</td>
                                            <td>{{ $car->model }}</td>
                                            <td>{{ $car->rok }}</td>
                                            <td>{{ $car->moc }}</td>
                                            <td>{{ $car->rodzaj }}</td>
                                            <td>{{ $car->skrzynia }}</td>
                                            <td>{{ $car->naped }}</td>
                                            <td>{{ $car->miejsca }}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}"><i
                                                        class="fa fa-eye"></i></a>
                                                <a class="btn btn-warning" href="{{ route('cars.edit',$car->id) }}"><i
                                                        class="fa fa-pencil"></i></a>
                                                <form class="d-inline" action="{{ route('cars.destroy',$car->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
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
