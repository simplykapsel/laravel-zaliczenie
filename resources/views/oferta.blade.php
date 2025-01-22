@extends('layouts.mainlayout')

@section('content')
    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Nasz flota:</h1>
                    <p class="lead text-muted">Poniżej zdjęcia i krótki opis naszych spełniaczy marzeń.</p>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($cars as $car)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                     src="{{ asset('uploads/addedCars/'.$car->file_path) }}">

                                <div class="card-body">
                                    <p class="card-text">
                                        <b>Marka:</b> {{$car->marka}}<br>
                                        <b>Model:</b> {{$car->model}}<br>
                                        <b>Rok produkcji:</b> {{$car->rok}}<br>
                                        <b>Moc:</b> {{$car->moc}}KM<br>
                                        <b>Rodzaj silnika:</b> {{$car->rodzaj}}<br>
                                        <b>Skrzynia biegów:</b> {{$car->skrzynia}}<br>
                                        <b>Rodzaj napędu:</b> {{$car->naped}}<br>
                                        <b>Ilość miejsc:</b> {{$car->miejsca}}
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        @auth
                                            @if (is_null($car->user_id))
                                                <form action="{{ route('startPost',$car->id) }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" id="id" name="id"
                                                           value="{{$car->id}}">
                                                    <input type="hidden" id="user_id" name="user_id"
                                                           value="{{Auth::user()->id}}">
                                                    <button type="submit" class="btn btn-sm btn-outline-primary ">
                                                        Weź auto
                                                    </button>
                                                </form>
                                            @else
                                                <button type="button" class="btn btn-sm btn-outline-secondary"
                                                        disabled>
                                                    Zarezerwowane
                                                </button>
                                            @endauth
                                            @else
                                            <button type="button" class="btn btn-sm btn-outline-secondary"
                                                    disabled>
                                                Zaloguj się, aby zarezerwować!
                                            </button>
                                           @endif
                                    </div>  
                                </div>
                            </div>

                        </div>
                    @endforeach


                </div>
            </div>
        </div>

    </main>
@endsection
