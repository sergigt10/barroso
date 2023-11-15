@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/barroso2.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Especialistes en ortodòncia, implants i estètica</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-2">Els doctors Albert i Cristina Barroso, atendran i escoltaran les necessitats de cada pacient durant la primera visita. D'acord amb aquestes es farà una planificació i proposta de tractament coordinat amb la resta de l'equip. </p>
                    <p class="color-2">La Doctora Cristina Barroso després d'acabar els estudis en odontologia va realitzar formacions complementàries en periodòncia i odontopediatria, i va obtenir l'especialitat en ortodòncia després de 3 anys de dedicació exclusiva en el Màster d'Ortodòncia de la Universitat de Barcelona. Actualment imparteix docència a l'escola d' higienistes del centre d'estudis Aurea i en el Màster d'Odontopediatria de la Universitat de Barcelona.<br><br>El Doctor Albert Barroso després dels estudis de llicenciatura va realitzar una formació exclusiva en cirurgia oral, implants i pròtesi durant dos anys a Barcelona. Posteriorment va obtenir el títol de Doctor en Odontologia “CUM LAUDE” defensant una tesi doctoral generada en un estudi clínic realitzat a la Clínica Barroso, del que s'han derivat diferents publicacions científiques internacionals.*** Actualment i des del 2007 imparteix docència a la Universitat Internacional de Catalunya en el Grau d'Odontologia, el Màster de Cirurgia Oral i en diferents cursos de formació continuada i congressos. </p>
                </div>
                <div class="col-md-12">
                    <p class="color-2">
                        <span style="font-size: 14px;">*** Barroso-Panella A., Lucas E., Lazaro A.<strong> Preservación, implante inmediato o protocolo diferido: toma de decisiones en el sector estético. </strong>Periodoncia Clínica 2016. </span>
                    </p>
                    <p class="color-2">
                        <span style="font-size: 14px;">*** Barroso-Panella A., Gargallo-Albiol J. Hernández-Alfaro F.<strong> Evaluation of bone stability and esthetic results after immediate implant placement using a novel synthetic bone substitue in the anterior zone: results after 12 months.</strong> Int JPeriodontics Restorative Dent 2018.</span><br><br>
                        <span style="font-size: 14px;"> *** Barroso-Panella A., Ortiz-Puigpelat O., Altuna-Fistolera P., Lucas-Taulé E., Hernández-Alfaro F., Gargallo-Albiol J. <strong>Evaluation of periimplant tissue stability and patient's satisfaction after immediate implant placement in the aesthetic area. A 3-year follow-up study of an on-going prospective study. </strong>Int JPeriodontics Restorative Dent 2020.</span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="item" style="margin-bottom: 0px;">
                        <div class="img"> 
                            <img src="{{ asset('frontend/img/implants-girona2.jpg') }}" alt="Clínica Barroso"> 
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item" style="margin-bottom: 0px;">
                        <div class="img">
                            <img src="{{ asset('frontend/img/implants-girona4.jpg') }}" alt="Clínica Barroso">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <p>Reposicionament quirúrgic del marge gingival per a millorar l'estètica del somriure.</p>
                </div>

                <div class="col-md-6">
                    <div class="item" style="margin-bottom: 0px;">
                        <div class="img"> 
                            <img src="{{ asset('frontend/img/implants-girona.jpg') }}" alt="Clínica Barroso">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item" style="margin-bottom: 0px;">
                        <div class="img">
                            <img src="{{ asset('frontend/img/implants-girona3.jpg') }}" alt="Clínica Barroso">
                        </div>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <p>Modificació de la posició de les dents amb ortodòncia per a donar més amplitud al somriure.</p>
                </div>

            </div>
        </div>
    </section>
@endsection