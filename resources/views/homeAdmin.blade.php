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
                        <h4>Userzy:</h4>
                        <table>
                            <tr>
                                <th>E-Mail</th>
                                <th>Imie</th>
                                <th>Nazwisko</th>
                                <th>Rola</th>
                            </tr>
                            @foreach($name as $data)
                            <tr>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->role }}</td>
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
