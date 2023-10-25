@extends('frontend.layouts.app')

@section('content')
<section class="banner-style-one">
    <div class="parallax" style="background-image: url({{ asset('frontend/assets/images/productes-seguretat-i-foc.jpg') }});"></div>
    <div class="container">
        <div class="row">
            <div class="banner-details">
                <h2>Error 404</h2>
            </div>
        </div>
    </div>
</section>

<section class="gap product-detail light-bg-transparent">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                Pàgina no disponible. <a href="https://www.clinicabarroso.com/">Tornar a la pàgina d'inici.</a>
            </div>
        </div>
    </div>
</section>

@endsection