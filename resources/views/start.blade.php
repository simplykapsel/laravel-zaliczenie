@extends('layouts.mainlayout')

@section('content')
    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="../assets/cars/bmw_slider.jpg">
                    </img>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>Example headline.</h1>
                            <p>Some representative placeholder content for the first slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="../assets/cars/mustang.jpeg">
                    </img>

                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Some representative placeholder content for the second slide of the carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">

                    <img class="bd-placeholder-img" width="100%" height="100%" src="../assets/cars/flota.jpeg">
                    </img>
                    <div class="container">
                        <div class="carousel-caption text-end">
                            <h1>One more for good measure.</h1>
                            <p>Some representative placeholder content for the third slide of this carousel.</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

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
                                        <div class="btn-group">
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
                                                @endauth
                                                @else
                                                    <button type="button" class="btn btn-sm btn-outline-secondary"
                                                            disabled>
                                                        Weź auto
                                                    </button>
                                                @endif

                                        </div>
                                        <small class="text-muted">Tak</small>
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
