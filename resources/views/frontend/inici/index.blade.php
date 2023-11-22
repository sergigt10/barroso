@extends('frontend.layouts.app')

@section('content')
    <!-- Slider -->
    <header class="header slider-fade">
        <!-- Desktop version -->
        <div class="owl-carousel owl-theme mobile-hidden">
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/img/slider/2.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("A Girona des de 1949")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('frontend/img/slider/4.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("Especialistes en ortodòncia, <br>implants i estètica")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/img/slider/3.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("A l'avantguarda de la innovació")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('frontend/img/slider/slide-2.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("Una clínica dental pensada per a tu")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Desktop version -->

        <!-- Mobile version -->
        <div class="owl-carousel owl-theme mobile-show" style="display: none;">
            <!-- The opacity on the image is made with "data-overlay-dark="number". You can change it using the numbers 0-9. -->
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/img/slider/2-mobile.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("A Girona des de 1949")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('frontend/img/slider/4.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("Especialistes en ortodòncia, <br>implants i estètica")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="2" data-background="{{ asset('frontend/img/slider/3-mobile.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("A l'avantguarda<br> de la innovació")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center item bg-img" data-overlay-dark="3" data-background="{{ asset('frontend/img/slider/slide-2-mobile.jpg') }}">
                <div class="v-middle caption">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 offset-md-1">
                                <h3>@lang("Una clínica dental pensada per a tu")</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mobile version -->

    </header>
    <!-- About -->
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <div class="section-subtitle"></div>
                    <div class="section-title mt-60">@lang("Un equip centrat en tu")</div>
                    <p>@lang("Clínica Barroso posa a disposició un equip multidisciplinar experts en ortodòncia i odontopediatria, implantologia i rehabilitació oral, estètica dental, endodòncia i periodòncia amb els coneixements més actualitzats per a que la teva experiència sigui la millor possible.")</p>
                    <p>@lang("Cada cas serà tractat de manera individualitzada, buscant un tractament “fet a mida” per a cada situació particular.")</p>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>@lang("Cita previa")</p> <a href="tel:+34972208901">972 208 901</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <img class="mobile-image" style="width: 732px;" src="{{ asset('frontend/img/clinica-dental-girona.jpg') }}" alt="Clínica Barroso" class="mt-0">
                </div>
            </div>
        </div>
    </section>

    <section class="services section-padding section-padding-portada">
        <div class="container">
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="{{ route('frontend.dissenySomriures.index') }}">
                            <img src="{{ asset('frontend/img/somriure.jpg') }}" alt="Clínica Barroso">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info"></div>
                            <h4>@lang("Disseny de somriures")</h4>
                            <p>@lang("Somriure és un acte instintiu, natural i fins i tot beneficiós per a la salut.")</p>
                            <div class="butn-dark"> 
                                <a href="{{ route('frontend.dissenySomriures.index') }}"><span>@lang("Veure més")</span></a> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info"></div>
                            <h4>@lang("Odontologia avançada")</h4>
                            <p>@lang("Buscant l'excel.lència en cada tractament.")</p>
                            <div class="butn-dark"> <a href="{{ route('frontend.odontologia.index') }}"><span>@lang("Veure més")</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="{{ route('frontend.odontologia.index') }}"><img src="{{ asset('frontend/img/odo.jpg') }}" alt="Clínica Barroso"></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 p-0 animate-box" data-animate-effect="fadeInLeft">
                    <div class="img left">
                        <a href="{{ route('frontend.dentistaGirona.index') }}"><img src="{{ asset('frontend/img/es.jpg') }}" alt="Clínica Barroso"></a>
                    </div>
                </div>
                <div class="col-md-6 p-0 bg-cream valign animate-box" data-animate-effect="fadeInRight">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info"></div>
                            <h4>@lang("Especialistes en ortodòncia, implants i estètica")</h4>
                            <p>@lang("Formació, dedicació, resultats.")</p>
                            <div class="butn-dark"> <a href="{{ route('frontend.dentistaGirona.index') }}"><span>@lang("Veure més")</span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 bg-cream p-0 order2 valign animate-box" data-animate-effect="fadeInLeft">
                    <div class="content">
                        <div class="cont text-left">
                            <div class="info"></div>
                            <h4>@lang("La veu de l'expert")</h4>
                            <p>@lang("Innovació i actualització constants.")</p>
                            <div class="butn-dark"> <a href="{{ route('frontend.invisalign.index') }}"><span>@lang("Veure més")</span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0 order1 animate-box" data-animate-effect="fadeInRight">
                    <div class="img">
                        <a href="{{ route('frontend.invisalign.index') }}"><img src="{{ asset('frontend/img/ex.jpg') }}" alt="Clínica Barroso"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="video-wrapper video section-padding bg-img bg-fixed" data-overlay-dark="3" data-background="{{ asset('frontend/img/central.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                   <br><br><br>
                    <div class="section-subtitle"><span>CLÍNICA BARROSO</span></div>
                    <div class="section-title"><span>@lang("Una clínica dental amb historia")</span></div>
                    <div class="butn-dark"> <a href="{{ route('frontend.historia.index') }}"><span>@lang("Veure més")</span></a> </div>
                </div>
            </div>  
        </div>
    </section>
@endsection