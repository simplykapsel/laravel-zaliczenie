@extends('layouts.mainlayout')

@section('content')
    <section class="py-5">
        <div class="container px-5 my-5">
            <div class="text-center mb-5">
                <h1 class="fw-bolder">Najczęściej zadawane pytania</h1>
                <p class="lead fw-normal text-muted mb-0">Jak możemy wam pomóc?</p>
            </div>
            <div class="row gx-5">
                <div class="col-xl-8">
                    <!-- FAQ Accordion 1-->
                    <h2 class="fw-bolder mb-3">Co warto wiedzieć...</h2>
                    <div class="accordion mb-5" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Dlaczego nie mogę wypożyczyć auta?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Jeślii nie możesz wypożyczyć auta to istnieją dwa możliwe odpowiedzi na to
                                        pytanie<br></strong>
                                    a)Nie jesteś zarejestrowany<br/>
                                    b)Auto jest wypożyczone przez kogoś innego (Zapytaj znajomego czym to on czasem
                                    jeździ :D)
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Czy są ograniczenia na wynajmowanie aut?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Od zawsze powtarzamy</strong> <i> „Klient nasz pan”</i><br>
                                    Na naszej stronie nie ma żadnych ograniczeń oraz kruczków<br/>
                                    Jedynym ograniczeniem jest zasobność naszej floty.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">Gdzie mogę zwrócić pojazd?
                                </button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>To bardzo proste...</strong><br>
                                    Aby zwrócić auto wystarczy wejść na swój profil i na liście aktualnie posiadanych
                                    aut kliknąc przycisk zwrotu pojazdu. Wtedy wszystko automatycznie zostanie wykonane
                                    po naszej stronie.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
