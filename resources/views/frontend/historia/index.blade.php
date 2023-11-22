@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/central2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>@lang("Una clínica dental amb història")</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> 
                    <h2>@lang("Llarga tradició i dedicació")</h2>
                    <p>@lang("Clínica Barroso compta amb una llarga tradició de dedicació a l'odontología, solucionant els problemes bucodentals de milers de pacients durant els més de 70 anys de presencia a Girona.<br><br> En l'any 1949 el Dr Enric Barroso i Baixerias, després de finalitzar els seus estudis en odontologia a la Universitat de Madrid, va inaugurar la primera clínica ubicada al principi del Carrer del Carme, a tocar de Plaça Catalunya de Girona. També durant uns anys Clínica Barroso va atendre pacients al municipi de Banyoles.")</p>
                    <img src="{{ asset('frontend/img/historia.jpg') }}" class="mb-30" alt="Clínica Barroso">
                    <p>@lang("Després d'una llarga i exitosa trajectòria, l'activitat laboral del doctor començà a reduir-se i és en aquest moment que la segona generació d'especialistes pren el relleu. <br>Després de finalitzar els seus estudis en medicina i realitzar l'especialitat en estomatologia a la Universitat de Barcelona, l'any 1983 el Dr Enric Barroso i Bosch obre unes noves instal.lacions al centre de Girona, concretament al carrer Cor de Maria. En l'any 2010, amb la recent incorporació a l'equip dels doctors Cristina i Albert Barroso, tercera generació de professionals dedicats a la odontologia, fou necessari traslladar-se a les modernes i espaioses instal.lacions ubicades al barri dels Químics de Girona.<br><br>Aquest barri és conegut històricament per la presència d'una important fàbrica gironina “Indústrias químicas y tartáricas” (que estava en ple funcionament als anys 60 i a qui deu el seu nom), on encara segueix eixida una gran xemeneia en la ubicació exacta on hi habia la fàbrica originalment.")</p> 
                    <img src="{{ asset('frontend/img/historia2.jpg') }}" class="mb-30" alt="Clínica Barroso">
                    <p>@lang("En les noves instal.lacions ubicades a aquest barri, a la Pujada Creu de Palau 11-13, des de l'any 2010 fins a dia d'avui, es disposa de la tecnologia més avançada, i el que és més important, un equip humà altament qualificat i amb la màxima autoexigència per a oferir les millors solucions als problemes de salut bucodental dels pacients gironins que segueixen depositant la seva confiança en Clínica Barroso.")</p>
                </div>
            </div>
        </div>
    </section>
@endsection