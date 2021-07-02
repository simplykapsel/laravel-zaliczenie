@extends('layouts.mainlayout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left p-3">
                    <h2>Zarządzaj autami</h2>
                </div>
                <div class="pull-right p-3">
                    <a class="btn btn-success" href="{{ route('cars.create') }}">Stwórz nowe auto</a>
                </div>
                <div class="pull-right p-3">
                    <a class="btn btn-success" href="{{ route('admin') }}">Powrót</a>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>ID Użytkownika</th>
                        <th>Marka</th>
                        <th>Model</th>
                        <th>Rok</th>
                        <th>Moc</th>
                        <th>Rodzaj silnika</th>
                        <th>Rodzaj skrzynia</th>
                        <th>Rodzaj napędu</th>
                        <th>Ilość miejsc</th>
                        <th>Zdjęcie podglądowe</th>
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
                            <td><img width="100%" height="auto"
                                     src="{{ asset('uploads/addedCars/'.$car->file_path) }}"></td>
                            <td>
                                <a class="btn btn-info" href="{{ route('cars.show',$car->id) }}"><i
                                        class="fa fa-eye"></i></a>
                                <a class="btn btn-warning" href="{{ route('cars.edit',$car->id) }}"><i
                                        class="fa fa-pencil"></i></a>
                                <form class="d-inline" action="{{ route('cars.destroy',$car->id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
