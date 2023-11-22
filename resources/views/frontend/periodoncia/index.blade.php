@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-dental-barroso-periodoncia.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>@lang("Periodòncia i prevenció")</h1>
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
                    <p class="color-2">@lang("La periodòncia és l'especialitat de l'odontologia que diagnostica i tracta els problemes dels teixits que donen suport a les dents (genives). Les principals malalties periodontals són la gingivitis i la periodontitis. La gingivitis consisteix en la inflamació i sagnat de la geniva sense afectar l'os. Quan l'os que dona suport a la dent comença a ser destruït per un procés bacterià ja parlem de periodontitis.")</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/periodoncia-girona.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-2">@lang("Procés de la malaltia periodontal amb inflamació gingival i destrucció d'os alveolar.")</p>
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
                    <p class="color-4">@lang("El tractament de la malaltia periodontal consisteix en una adequada higiene professional, amb l'utilització d'ultrasons i raspatges amb curetes periodontals. També serà molt important en cas que sigui necessari la correcció de les tècniques del manteniment de la higiene oral diària per part del pacient.")</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/periodoncia-girona-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">@lang("Recuperació parcial de l'os perdut al voltant d'una dent amb malaltia periodontal.")</p>
                </div>
                <div class="col-md-12">
                    <p class="color-4">@lang("En aquesta especialitat també s'inclouen les tècniques de cirurgia plàstica mucogingival. Són tècniques quirúrgiques que tenen com a objectiu corregir els defectes de la geniva que envolta la dent. S'empraran tècniques de microcirurgia mucogingival per a millorar la qualitat i la posició de les genives afectades.")</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/periodoncia-girona-3.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">@lang("Recuperació de quantitat de teixit gingival en recessions múltiples amb empelts de geniva.")</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/periodoncia-girona-4.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">@lang("Millora de la qualitat i quantitat de geniva en els dos incisius inferiors.")</p>
                    <br><br>
                </div>
            </div>
        </div>
    </section>
@endsection