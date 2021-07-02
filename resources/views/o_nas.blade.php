@extends('layouts.mainlayout')

@section('content')
    <!-- Header-->
    <header class="py-5">
        <div class="container px-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xxl-6">
                    <div class="text-center my-5">
                        <h1 class="fw-bolder mb-3">Naszą pasją jest tworzenie stron internetowych.</h1>
                        <p class="lead fw-normal text-muted mb-4">Dokładamy wszelkich starań, żeby strony które tworzymy były jak najlepszej jakości.</p>
                        <a class="btn btn-primary btn-lg" href="#scroll-target">Troszkę o naszej firmie</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- About section one-->
    <section class="py-5 bg-light" id="scroll-target">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6"><img class="img-fluid rounded mb-5 mb-lg-0" src="../assets/blue.png" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Nasza działalność</h2>
                    <p class="lead fw-normal text-muted mb-0">Naszą firmę stworzyliśmy we dwójkę od podstaw. Nie wspieraliśmy się korporacyjną pomocą. Nie staraliśmy się przypodobać wielkim spółkom. Od zawsze chcieliśmy, aby nasze nazwiska znał każdy w mieście.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- About section two-->
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6 order-first order-lg-last"><img class="img-fluid rounded mb-5 mb-lg-0" src="../assets/cars/wykres.png" alt="..." /></div>
                <div class="col-lg-6">
                    <h2 class="fw-bolder">Historia</h2>
                    <p class="lead fw-normal text-muted mb-0">Działamy na rynku od 2008 roku – od tej pory poprzez dynamiczny i nieustanny rozwój przedsiębiorstwa, zajęliśmy czołowe miejsce na rynku wypożyczalni samochodów w Polsce. Dwukrotnie zostaliśmy nagrodzeni prestiżową nagrodą FLEET DERBY za rok 2013 i 2014 oraz za 2018, a także nagrodami DIAMENT FORBES 2016 i EKOFLOTA 2016 i GEPARD BIZNESU.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Team members section-->
    <section class="py-5 bg-light">
        <div class="container px-5 my-5">
            <div class="text-center">
                <h2 class="fw-bolder">Nasz zespół</h2>
                <p class="lead fw-normal text-muted mb-5">Stworzeni do odnoszenia sukcesów!</p>
            </div>
            <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="../assets/kapselv2.png" alt="..." />
                        <h5 class="fw-bolder">Bartek Wiśniewski</h5>
                        <div class="fst-italic text-muted">Student IT na CDV</div>
                    </div>
                </div>
                <div class="col mb-5 mb-5 mb-xl-0">
                    <div class="text-center">
                        <img class="img-fluid rounded-circle mb-4 px-4" src="../assets/patryk.jpeg" alt="..." />
                        <h5 class="fw-bolder">Patryk Kaczmarek</h5>
                        <div class="fst-italic text-muted">Student IT na CDV</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
@endsection
