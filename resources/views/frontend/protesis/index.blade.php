@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-dental-barroso-protesis-estetica.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Pròtesi i estètica</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Post -->
     <!-- Pricing -->
    <section class="pricing section-padding bg-black" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-2">La pròtesi dental substitueix les estructures dentals perdudes o deteriorades retornant a la boca tota la funcionalitat, resistència i estètica de les peces originals.</p>
                    <p class="color-2">Les pròtesis encaminades a solucionar problemes estètics son les facetes dentals.</p>
                    <p><b class="color-2">Què són les facetes dentals?</b></p>
                    <p class="color-2">Són fines làmines col.locades a la part de davant o frontal de cada dent. Les utilitzem per canviar i millorar diferents aspectes com el color, la forma o la posició. Per tant requeriran una preparació molt menor de la dent en comparació a les fundes o corones.</p>
                    <p class="color-2">Hi ha diferents tipus de facetes a valorar per l'especialista, però podríem dividir-les, segons el material en dues: facetes dentals de ceràmica i facetes de composite o resina.</p>
                    <p class="color-2">Les facetes ceràmiques es fabriquen amb tècniques indirectes (per a un tècnic de laboratori) i donaran un resultat superior a les de resina en quant a estètica i durabilitat.</p>
                    <p><b class="color-2">Què podem camuflar amb les facetes dentals?</b></p>
                    <p class="color-2">
                        -   Fractures<br>
                        -	Canvis de forma<br>
                        -	Desgastos i erosions<br>
                        -	Color<br>
                    </p>
                    <div class="text-center">
                        <br>
                        <img src="{{ asset('frontend/img/protesis-estetica-girona.jpg') }}" alt="Clínica Barroso" class="width-90">
                        <br><br>
                        <img src="{{ asset('frontend/img/protesis-estetica-girona-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-2">Modificació del color i la forma de les dents anteriors amb facetes dentals ceràmiques.</p>
                    </div>
                    <div class="reservations mb-30">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-4">En casos en què l'objectiu apart de l'estètica sigui recuperar la funció perduda, hi ha múltiples alternatives de materials i dissenys dirigits a donar la millor solució a les necessitats de cada pacient.</p>
                    <p class="color-4">La pròtesi no només ens permetrà recuperar la funcionalitat perduda sinó que també podrà aportar un rejoveniment de l'expressió del somriure.</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/protesis-estetica-girona-3.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">Rehabilitació oral total amb fundes sobre dents desgastades.</p>
                    <br>
                    <img src="{{ asset('frontend/img/protesis-estetica-girona-4.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">Recanvi de corona antiga fracturada. Es busca la màxima resistència amb els nous materials i la màxima mimetització amb la resta de dents.</p>
                    <br>
                </div>
                <div class="col-md-12">
                    <p class="color-4">Quan parlem de dentadures suportades sobre implants dentals podem realitzar diferents tipus de pròtesis, en quant a prestacions (fixes / amovibles) i en quant a materials (ceràmiques o de resina). Cada pacient serà sotmès a un estudi meticulós per a valorar quin tipus de pròtesi és més adequat segons les condicions que presenti.</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/protesis-estetica-girona-5.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">Dentadures totals fixes sobre implants dentals.</p>
                    <br>
                </div>
            </div>
        </div>
    </section>
@endsection