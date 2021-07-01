@extends('layouts.mainlayout')

@section('content')
    <main class="flex-shrink-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left p-3">
                    <h2>Zarządzaj użytkownikami</h2>
                </div>
                <div class="pull-left p-3">
                    <a class="btn btn-success" href="{{ route('admin') }}">Powrót</a>
                </div>
                <div class="pull-right p-3">
                    <a class="btn btn-success" href="{{ route('users.create') }}">Stwórz nowego użytkownika</a>
                </div>
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
                    <th>ID Użytkownika</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                    <th>Mail</th>
                    <th>Role</th>
                    <th>Akcje</th>
                </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->surname }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('users.show',$user->id) }}"><i
                                    class="fa fa-eye"></i></a>
                            <a class="btn btn-warning" href="{{ route('users.edit',$user->id) }}"><i
                                    class="fa fa-pencil"></i></a>
                            <form class="d-inline" action="{{ route('users.destroy',$user->id) }}" method="POST">
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
    </main>
@endsection
