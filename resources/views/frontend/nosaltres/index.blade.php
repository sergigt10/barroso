@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-img-mobile bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-barroso.jpg') }}" style="background-size: contain;">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90"></div>
			</div>
        </div>
    </div>
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title"><span>@lang("Qui som")</span></div>
                    <p class="color-2">
                        @lang("Som una clínica dental amb una llarga tradició familiar, ubicada a Girona des de l'any 1949.<br><br> L'equip multidisciplinari de dentistes especialitzats format en la seva majoria per a professors universitaris està dirigit per la tercera generació d'odontòlegs de la família Barroso.<br><br> L'autoexigència i el compromís en cada tractament, i la confiança depositada per a milers de pacients durant més de 70 anys d'activitat, la converteix en una clínica dental de referència a Girona.")
                    </p>
                </div>
                <div class="col-md-6 text-center">
                    <br>
                    <img src="{{ asset('frontend/img/nosaltres.jpg') }}" alt="Clínica Barroso">
                </div>
            </div>
        </div>
    </section>

    <section class="rooms1 section-padding bg-cream" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/enric-'.Config::get('app.locale').'.jpg') }}" title="DR. ENRIC BARROSO" class="img-zoom"> 
                                <img src="{{ asset('frontend/img/enric.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        DR. ENRIC BARROSO<br>
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("ODONTOLOGIA RESTAURADORA I PRÒTESI")
                                    </div>
                                </div>
                            </a> 
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/albert-'.Config::get('app.locale').'.jpg') }}" title="DR. ALBERT BARROSO" class="img-zoom"> 
                                <img src="{{ asset('frontend/img/albert.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        DR. ALBERT BARROSO
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("CIRURGIA ORAL, IMPLANTS I PRÒTESIS")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/cristina-'.Config::get('app.locale').'.jpg') }}" title="DRA. CRISTINA BARROSO" class="img-zoom">
                                <img src="{{ asset('frontend/img/cristina2.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        DRA. CRISTINA BARROSO
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("ORTODÒNCIA I ODONTOPEDIATRIA")
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/beatriz-'.Config::get('app.locale').'.jpg') }}" title="DRA. BEATRIZ MARTINEZ" class="img-zoom">
                                <img src="{{ asset('frontend/img/na.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        DRA. BEATRIZ MARTINEZ
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("ENDODONCISTA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/anna-'.Config::get('app.locale').'.jpg') }}" title="DRA. ANNA PLANA" class="img-zoom">
                                <img src="{{ asset('frontend/img/anna.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        DRA. ANNA PLANA
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("ODONTOLOGIA RESTAURADORA I ESTÈTICA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/pilar-'.Config::get('app.locale').'.jpg') }}" title="PILAR CASTILLO" class="img-zoom">
                                <img src="{{ asset('frontend/img/pilar.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        PILAR CASTILLO
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("AUXILIAR I HIGIENISTA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/marta-'.Config::get('app.locale').'.jpg') }}" title="MARTA VERDAGUER" class="img-zoom">
                                <img src="{{ asset('frontend/img/marta.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        MARTA VERDAGUER
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("AUXILIAR DE CLÍNICA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/yael-'.Config::get('app.locale').'.jpg') }}" title="YAEL GELI" class="img-zoom">
                                <img src="{{ asset('frontend/img/ca.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        YAEL GELI
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("AUXILIAR I HIGIENISTA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item gallery-item" style="padding-top: 0;">
                        <div class="position-re o-hidden">
                            <a href="{{ asset('frontend/img/curriculum/alba-'.Config::get('app.locale').'.jpg') }}" title="ALBA ORTIZ" class="img-zoom">
                                <img src="{{ asset('frontend/img/alba.jpg') }}" alt="Clínica Barroso">
                                <div class="con">
                                    <h5>
                                        ALBA ORTIZ
                                    </h5>
                                    <div class="line" style="color: white;">
                                        @lang("AUXILIAR I HIGIENISTA")
                                    </div>
                                </div>
                            </a>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection