@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/clinica-dental-barroso-endodoncia.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Endodòncia</h1>
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
                    <p class="color-2">L'endodòncia és la part de l'odontologia que s'ocupa del diagnòstic i tractament de les malalties de les dents que afecten la polpa dental (el nervi). Quan la càries ataca a la dent, la va foradant poc a poc. Primer es fa malbé l'esmalt. Si segueix progressant, afecta la dentina i, si avança encara més, arriba a la polpa on es troba el nervi.</p>
                    <p class="color-2">Les càries solen avançar lentament pel que és fàcil detectar-les abans que siguin massa grans. Moltes vegades es descobreixen per mitjà d'una radiografia. No sempre fan mal. A vegades no se sent dolor fins que ha arribat al nervi. Quan la càries arriba al nervi, aquest s'infecta i per això s'inflama i fa mal. Si la inflamació persisteix, el nervi pot perdre la seva vitalitat. Ja no se sent dolor, però es produeix pus, que surt per la punta de l'arrel, i ocasiona un flemó. En el moment que la càries arriba al nervi és quan cal realitzar l'endodòncia, que consisteix en l'obertura d'una cavitat en la dent i l'eliminació del nervi que ha estat afectat per la càries.</p>
                    <p class="color-2">Després de la seva desinfecció, que és fonamental, s'omple el conducte amb un material obturador. Tot aquest procés és molt delicat i meticulós, i la seva complexitat depèn de la morfologia de les arrels.</p>
                    <div class="text-center">
                        <br>
                        <img src="{{ asset('frontend/img/endodoncia-girona.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-2">Desaparició de l'infecció després de realitzar l'endodòncia.</p>
                    </div>
                    <div class="reservations mb-30">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection