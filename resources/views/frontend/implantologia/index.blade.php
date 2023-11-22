@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-dental-barroso-implantologia.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>@lang("Implantologia dental")</h1>
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
                    <p class="color-2">@lang("Els implants dentals han revolucionat l'odontologia dels últims 40 anys, permetent millorar la qualitat de vida de moltes persones. Permeten crear les bases per a substituir les dents originals i que les noves semblin, se sentin i funcionin com dents naturals.")</p>
                    <p class="color-2">@lang("Les persones que han perdut dents, poden, gràcies als implants, menjar de tot, sabent que l'aparença natural de la seva boca es manté i que l'estètica facial es preserva.")</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/implantologia-girona.jpg') }}" alt="Clínica Barroso" class="width-auto">
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
                    <p><b class="color-4">@lang("Què són els implants dentals?")</b></p>
                    <p class="color-4">@lang("Els implants dentals són petits aditaments amb rosca externa i interna, fabricats d'un aliatge de titani. El titani és un metall biocompatible, la seva principal característica és la capacitat d'oseointegració amb els teixits, és a dir, la unió directe amb l'os una vegada col.locat. Aquest procés biològic dura entre 2 i 3 mesos en condicions normals. Es convertirà així en un ancoratge sòlid on posteriorment es podrà fixar la pròtesi dental, és a dir, la dent.")</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/implants.gif') }}" alt="Clínica Barroso" class="width-auto">
                        <br><br>
                    </div>
                    <p class="color-4">@lang("La col.locació de l'implant dental és l'única manera d'evitar la degeneració atròfica que es dóna en l'os una vegada es produeix l'extracció de la dent. A Clínica Barroso sempre buscarem l'alternativa de tractament que ens permeti reduir al màxim l'invasivitat del procediment i que a la vegada permeti assolir el millor resultat possible.")</p>
                </div>
                <div class="col-md-12">
                    <p><b class="color-4">@lang("Què és la cirurgia mínimament invasiva?")</b></p>
                    <p class="color-4">@lang("La cirurgia mínimament invasiva consisteix en la realització de la cirurgia (col.locació d'implants dentals, empelts d'os o de geniva, extraccions,…) amb la mínima manipulació dels teixits, reduint l'extensió de les incisions o fins i tot realitzant cirurgies sense l'ús del bisturí.")</p>
                </div>
                <div class="col-md-12">
                    <p><b class="color-4">@lang("Quins beneficis té la cirurgia mínimament invasiva?")</b></p>
                    <p class="color-4">@lang("Principalment tenir un postoperatori més lleu, amb menys inflamació, hematomes i menys molèsties associades a la cicatrització dels teixits. A part, tenint més cura de la manipulació dels teixits és més difícil tenir complicacions postoperatòries com infeccions o sagnat. En moltes ocasions la implementació d'aquest tipus de tècniques també comporta reduir sensiblement els temps totals de tractament, reduint el número de visites per a la realització del tractament.")</p>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/implantologia-girona-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    <br>
                    <p class="color-4">@lang("Col.locació d'implant dental en incisiu central superior sense l'utilització de bisturí.")</p>
                    <br>
                </div>
                <div class="col-md-12">
                    <p><b class="color-4">@lang("Avenços quirúrgics: Càrrega immediata")</b></p>
                    <p class="color-4">@lang("En algunes ocasions es podrà realitzar la col.locació de l'implant el mateix dia que es realitza l'extracció dental, reduint així el nombre d'intervencions. Els avenços en el macrodisseny dels implants ens permetrà que puguem posar la pròtesi dental sobre l' implant el mateix dia, proveint així d'una pròtesi provisional fixe des del mateix moment en què es treu la dent, solucionant el problema estètic en un sol dia. És el que s'anomena càrrega immediata o estètica immediata.")</p>
                    <p class="color-4">@lang("A Clínica Barroso som especialistes en tècniques de cirurgia mínimament invasives. El Dr Albert Barroso ha realitzat diferents estudis d'investigació sobre aquests tipus de tècniques. Ha centrat part del seu temps en treballs de recerca sobre implantologia immediata. Aquestes tècniques ens permeten posar els implants sense utilitzar el bisturí, i per tant, sense necessitat de punts de sutura. Al manipular menys els teixits, la inflamació post operatòria i les molèsties associades son molt menors. Així, en una sola intervenció podem substituir la dent defectuosa per a una de nova (provisional) fixa, mantenint en tot moment l'estètica i evitant l'ús d'in còmodes aparells de treure i posar. En una de les publicacions científiques del Dr. Albert Barroso es constata que la satisfacció dels pacients és molt més elevada amb la implementació d'aquest tipus de protocols en implantologia dental***.")</p>
                    <p class="color-4" style="font-size: 15px;">*** Barroso-Panella A., Ortiz-Puigpelat O., Altuna-Fistolera P., Lucas-Taulé E., Hernández-Alfaro F., Gargallo-Albiol J. Evaluation of periimplant tissue stability and patient's satisfaction after immediate implant placement in the aesthetic area. A 3-year follow-up study of an on-going prospective study. Int JPeriodontics Restorative Dent 2020.</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/implantologia-girona-3.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-4">@lang("Substitució de dent fracturada per un implant dental. Aspecte clínic després de 5 anys.")</p>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection