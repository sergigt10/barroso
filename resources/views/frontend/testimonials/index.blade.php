@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/tes.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Clínica Barroso, una experiència diferent</h5>
                    <h1>Testimonials</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Image Gallery -->
    <section class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-10 animate-box fadeInUp animated" data-animate-effect="fadeInUp">
                    <div class="section-title testimonials">Anar al dentista pot suposar una experiència poc agradable per a moltes persones. Donem molta importància a que puguis sentir-te còmode, relaxat i confiat durant tot el tractament. Som especialistes en tècniques mínimament invasives, que milloraran en moltes ocasions la teva experiència.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Gallery -->
    <section class="section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-subtitle">Què opinen</div>
                    <div class="section-title">ELS NOSTRES PACIENTS?</div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/ckU2Z5Dbl78?si=ylG-G37m8Jrj4l9M"> 
                                <img src="{{ asset('frontend/img/tes-1.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/ckU2Z5Dbl78?si=ylG-G37m8Jrj4l9M"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/PQTUsrZ44fY">
                                <img src="{{ asset('frontend/img/tes-2.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/PQTUsrZ44fY"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/rPZyeW-Ge4w?si=WPK1Gi-kA3cFI_-l"> 
                                <img src="{{ asset('frontend/img/tes-3.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/rPZyeW-Ge4w?si=WPK1Gi-kA3cFI_-l"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> 
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/84hR2pMd2NY"> 
                                <img src="{{ asset('frontend/img/tes-4.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/84hR2pMd2NY"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/cpN47W4fW3E"> 
                                <img src="{{ asset('frontend/img/tes-5.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/cpN47W4fW3E"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="vid-area mb-30">
                        <div class="vid-icon"> 
                            <a class="animation-video vid" href="https://youtu.be/EOux9UHn5Vw">
                                <img src="{{ asset('frontend/img/tes-6.jpg') }}" alt="YouTube Clínica Barroso">
                            </a>
                            <a class="video-gallery-button vid" href="https://youtu.be/EOux9UHn5Vw"> 
                                <span class="video-gallery-polygon">
                                    <i class="ti-control-play"></i>
                                </span> 
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection