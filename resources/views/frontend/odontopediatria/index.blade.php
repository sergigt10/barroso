@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/ortodoncia-odontopediatria.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>@lang("Odontopediatria")</h1>
                    <div class="post">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Post -->
     <!-- Pricing -->
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title"><span>@lang("Quan recomanem la primera visita amb l'odontopediatra?")</span></div>
                    <p class="color-2">@lang("Recomanem la primera visita al voltant de l'any de vida, quan ja han erupcionat les primeres dents de llet. Durant aquesta primera visita donem les pautes als pares i mares de com mantenir una bona salut bucal i higiene de les dents del nadó. És molt important realizar controls periòdics per tal de prevenir càries o altres patologies en un futur. D'aquesta manera també aconseguim una rutina per tal de que el nen/a es familiaritzi amb nosalres i perdi l'ansietat de venir al dentista.")</p>
                    <div class="reservations mb-30">
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <img src="{{ asset('frontend/img/odontopediatria.jpg') }}" alt="Clínica Barroso">
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-4">
                        <p><b style="font-weight: 800;">@lang("Quins tipus de tractaments són els més freqüents?")</b></p>
                        <p><b style="font-weight: 800;">@lang("Eliminació de càries")</b></p>
                        <p>@lang("La diferència entre l'odontologia en adults i l'odontopediatria és que les càries dels nens són tractades en dents de llet en comptes de en dents definitives. Les dents definitives es formen sota les arrels de les de llet i qualsevol infecció a la dent de llet pot afectar a la definitiva. L'eliminació de càries es tracta de retirar l'estructura dental afectada i omplir el defecte amb un material de resina blanca.")</p>
                        <p><b style="font-weight: 800;">@lang("Pulpotomia/Pulpectomia")</b></p>
                        <p>@lang("És l'eliminació de la part de nervi afectat en els casos on la càries és molt profunda i ha arribat a afectar el nervi dental. Seguidament es substitueix per un material biocompatible.")</p>
                        <p><b style="font-weight: 800;">@lang("Reconstruccions de traumatismes")</b></p>
                        <p>@lang("Es tracta de reparar amb un material de resina blanca les dents fracturades a causa de caigudes, impactes o cops.")</p>
                        <p><b style="font-weight: 800;">@lang("Profilaxis i fluor")</b></p>
                        <p>@lang("Consisteix en aplicar fluor a les dents per tal d'augmentar la resistència de l'esmalt i remineralitzar-lo. L'aplicació de fluor periodicament ajuda a prevenir l'aparició de càries.")</p>
                        <p><b style="font-weight: 800;">@lang("Extraccions i mantenidors d'espai")</b></p>
                        <p>@lang("És possible la pèrdua d'una dent de llet abans de temps o que sigui necessària la seva extracció. En aquests casos, es sol utilitzar un mantenidor d'espai per guardar l'espai que ha quedat resultant, amb l'objectiu que la dent definitiva pugui créixer correctament en el seu lloc.")</p>
                        <p><b style="font-weight: 800;">@lang("Protectors bucals")</b></p>
                        <p>@lang("Serveixen per protegir les dents dels nens i nenes que realitzen activitats esportives amb risc de patir qualsevol tipus de trauma dental.")</p>
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection