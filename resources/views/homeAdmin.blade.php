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
                        <div class="card-body">

                            <h4>Użytkownicy:</h4>
                            <a class="btn btn-primary" href="/createUser">Dodaj użytkownika:</a>

                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>Imie</th>
                                    <th>Nazwisko</th>
                                    <th>Mail</th>
                                    <th>Rola</th>
                                    <th>Akcje</th>

                                </tr>
                                @foreach($users as $data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->surname }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->role }}</td>
                                        <td>
                                            <button class="btn btn-danger">D</button>
                                            <a class="btn btn-warning" href="/editUser">E</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            <h4>Auta:</h4>
                            <a class="btn btn-primary" href="/createCar">Dodaj auto:</a>

                            <table>
                                <tr>
                                    <th>ID</th>
                                    <th>User_id</th>
                                    <th>Marka</th>
                                    <th>Model</th>
                                    <th>Rok</th>
                                    <th>Moc</th>
                                    <th>Skrzynia</th>
                                    <th>Naped</th>
                                    <th>Miejsca</th>
                                    <th>Akcje</th>

                                @foreach($cars as $car)
                                    <tr>
                                        <td>{{ $car->id }}</td>
                                        <td>{{ $car->user_id }}</td>
                                        <td>{{ $car->marka }}</td>
                                        <td>{{ $car->model }}</td>
                                        <td>{{ $car->rok }}</td>
                                        <td>{{ $car->moc }}</td>
                                        <td>{{ $car->skrzynia}}</td>
                                        <td>{{ $car->naped }}</td>
                                        <td>{{ $car->miejsca }}</td>
                                        <td>
                                            <a class="btn btn-danger">D</a>
                                            <a href="/editUser" class="btn btn-warning">E</a>
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
