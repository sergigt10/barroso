@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/veu.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>La veu de l'expert</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item">
                        <a href="{{ route('frontend.implantsQualitat.index') }}">
                            <div class="img"> <img src="{{ asset('frontend/img/barroso.jpg') }}" alt="Clínica Barroso"> </div>
                            <div class="info">
                                <h6>DR. ALBERT BARROSO PANELLA</h6>
                                <p>CIRURGIA ORAL, IMPLANTS I PRÒTESIS</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item">
                        <a href="{{ route('frontend.ortodonciaOdontopediatria.index') }}">
                            <div class="img"><img src="{{ asset('frontend/img/cristina.jpg') }}" alt="Clínica Barroso"></div>
                            <div class="info">
                                <h6>DRA. CRISTINA BARROSO PANELLA</h6>
                                <p>ORTODONCIA I ODONTOPEDIATRIA</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection