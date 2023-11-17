@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-dental.jpg') }}">
        <div class="container">
            <div class="row">
				<div class="col-md-12 caption mt-90"></div>
			</div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Les nostres instal.lacions</div>
                    <div class="section-title">La clínica</div>
                </div>
                <!-- 3 columns -->
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-1.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-1.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-2.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-2.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-3.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-3.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-4.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-4.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-5.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-5.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 gallery-item">
                    <a href="{{ asset('frontend/img/clinica-dental-girona-6.jpg') }}" title="Clínica dental Barroso" class="img-zoom">
                        <div class="gallery-box">
                            <div class="gallery-img"> <img src="{{ asset('frontend/img/clinica-dental-girona-6.jpg') }}" class="img-fluid mx-auto d-block" alt="work-img"> </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
@endsection