@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/barroso-odontologia-avancada.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Odontologia avançada</h1>
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
                    <div class="section-title"><span>Quin és el procés del tractament dental a Clínica Barroso?</span></div>
                    <p class="color-2">En presentar-se un problema bucal, un diagnòstic adequat, així com la correcta elaboració d'un pla de tractament són imprescindibles. Prendre unes males decisions en aquesta fase pot condicionar la resta del tractament.</p>
                    <p class="color-2">En la fase de diagnòstic s'analitzaran els problemes estètics, funcionals o biològics que pugui presentar el pacient. Donem molt valor a la <b style="color:#FFF">1ª visita</b>, ja que és el moment en què es prendran les decisions per a donar solucions als problemes que es presenten.</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/odontologia-avancada.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    </div>
                    <br><br>
                    <p class="color-2">En aquesta visita es prenen els registres que siguin necessaris per a l'estudi adequat del problema bucodental: radiografies, registres de la dentició o fotografies, o fins i tot una radiografia 3D si és necessari o un escaneig intraoral. D'acord amb aquestes s'oferiran les possibilitats de tractament, quines són les més recomanables en el seu cas i quina duració pot tenir tot el tractament.</p>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/odontologia.jpg') }}" alt="Clínica Barroso" class="width-auto">
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
                <div class="col-md-6">
                    <p class="color-4">Després d'aquesta visita es podrà proporcionar un pla econòmic del cost del tractament i valorar la forma de pagament. Un cop el pacient decideixi començar s'abordarà el cas des de les diferents especialitats que pugui necessitar: periodòncia i prevenció, pròtesi i estètica, ortodòncia, cirurgia i implantologia, odontopediatria o endodòncia.</p>
                    <p class="color-4">
                        L'objectiu de la odontologia ha de ser intentar mantenir funcional i estèticament la dentició natural per a tota la vida del pacient. Per tant, l'odontòleg ha de ser un expert en fer els tractaments necessaris per a que el pacient pugui tenir les seves dents en un estat adequat al llarg de la seva vida. Aquesta és la tasca de la <b>odontologia conservadora</b>, que tracta les lesions derivades de les caries. La meticulositat i precisió en aquests procediments, a part d'un adequat manteniment per part del pacient, son les claus per a que les dents perdurin en el temps i no es deteriorin.
                    </p>
                    <p class="color-4">
                        La boca es un espai de difícil accés i visibilitat, per tant l'ús de lupes de magnificació amb una bona il·luminació pot ajudar en alguns casos aconseguir uns resultats de major qualitat. Treballar amb magnificació ens permetrà captar detalls que l'ull humà pot no percebre. Aquesta eina ens permetrà treballar millor en rehabilitacions estètiques, així com ser més precisos en certes intervencions quirúrgiques.
                    </p>
                </div>
                <div class="col-md-6" style="margin-top: 10px;">
                    <img src="{{ asset('frontend/img/odontologia-avancada-girona.jpg') }}" alt="Clínica Barroso">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px; padding-top:2px">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-4">La <b>implantologia i la ortodòncia</b> són especialitats reparadores o correctores de l'odontologia. A la vegada son especialitats que moltes vegades es complementen mútuament, realitzant així el que coneixem com a tractaments multidisciplinars. La qualitat dels implants i els dissenys de les pròtesis juguen un important paper en l'aparició de complicacions tant mecàniques com biològiques a mig-llarg plaç.<br><br>
                    Aquests problemes poden aparèixer en els primers moments després d'acabar el tractament o després del pas dels anys degut al desgast o fatiga d'alguns dels components. Són complicacions que s'han d'intentar evitar. És per això que a Clínica Barroso només treballem amb marques amb el màxim reconeixement, utilitzant tots els components originals per a la confecció de les dents.</p>
                </div>
                <div class="col-md-12 text-center">
                    <br>
                    <img src="{{ asset('frontend/img/odontologia-avancada-girona-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-4">La <b>periodòncia</b> és la especialitat de la odontologia encarregada de la prevenció i tractament dels problemes derivats de les genives. Aquests problemes sorgeixen per la acumulació de placa bacteriana i càlcul. El tractament d'aquests problemes consisteix en un adequat control dels factors causants, sent molt recomanable realitzar una higiene dental professional almenys un cop a l'any. <br><br>
                    Té molta importància el control de la enfermetat periodontal, ja que aquesta és la que afecta als teixits de suport de la dent. També s'inclou en aquesta especialitat la reparació d'inestetismes o defectes de les genives al voltant de dents o implants. Aquests es podran corregir amb tècniques de microcirurgia mucogingival.</p>
                </div>
                <div class="col-md-12 text-center">
                    <br>
                    <img src="{{ asset('frontend/img/odontologia-avancada-girona-3.jpg') }}" alt="Clínica Barroso" class="width-auto">
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
@endsection