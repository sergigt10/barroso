@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/odontopediatria-girona.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>@lang("Ortodòncia i estètica")</h1>
                    <div class="post"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Post -->
     <!-- Pricing -->
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-2">@lang("Molts pacients que abans no es plantejaven un tractament d'ortodòncia per motius estètics, amb por d'ensenyar “els ferros” en el somriure, ara tenen més opcions alhora de decidir. Primerament es va oferir la ortodòncia lingual, una complexa tècnica que actuava movent les dents des de dins el paladar, evitant així que es veiés l'aparatologia ortodòntica, però per altra banda donant moltíssimes incomoditats a l'hora de parlar o menjar. Actualment l'ortodòncia invisible és una altra modalitat que podem oferir als nostres pacients que els preocupa l'aspecte o l'estètica durant el procés. Amb unes fèrules transparents de molt poc gruix que encaixem a les dents de dalt i a les de baix, anem fent els moviments dentals desitjats. A més en la planificació del tractament podem previsualitzar el resultat final abans de començar.")</p>
                    <p class="color-2">@lang("Cal remarcar que l'ortodòncia no només beneficia el pacient estèticament si no que permet assolir una millor estabilitat oclusal i per tant una millor funció i salut a llarg termini.")</p>
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-4">@lang("En el cas dels nens i preadolescents l'ortodòncia també permet modificar el creixement maxil.lar i la mandíbula, especialment en nens que han adquirit mals hàbits com són la interposició lingual, la succió del dit, la respiració oral… Per això és molt important detectar aquests patrons de creixement incorrectes, ja que els tractaments a aquestes edats de creixement permet grans canvis tant a nivell facial com funcional, que en edat adulta poden ser molt més difícils de corregir.")</p>
                    <p class="color-4">@lang("L'ús de les noves tecnologies ens permet oferir tractaments més precisos i també una major comoditat pels pacients. Sabem que alguns procediments poden ser més molestos. Un d'ells són els motlles que prenem amb pastes de silicona per obtenir una rèplica amb guix de les dents. A Clínica Barroso fem un escaneig intraoral del pacient. L'escàner intraoral és un dispositiu electrònic que reprodueix les estructures de la cavitat oral amb imatges tridimensionals digitals. L'ús de l'escàner ofereix les següents avantatges:")</p>
                    <p class="color-4">
                        @lang("· Més comoditat pel pacient, ja que s'eviten les molèsties causades per les mides de silicona evitant arcades i sensació d'ofec.")<br>
                        @lang("· Ens permet ensenyar una imatge real i tridimensional de les dents.")<br>
                        @lang("· El pacient pot visualitzar els canvis mitjançant una predicció virtual dels moviments de les seves dents.")<br>
                        @lang("· Rapidesa a l'hora de realitzar els tractaments. Degut a que es treballen amb imatges podem enviar-les directament via internet al laboratori sense generar residus i transport de materials.")
                    </p>
                    <div class="reservations mb-30">
                    </div>
                </div>
                <div class="col-md-12">
                    <p><b>@lang("Ortodòncia combinada amb estètica")</b></p>
                    <p class="color-4">@lang("Alguns pacients no només busquen l'alineació de les seves dents si no també un canvi en la seva forma i color, és a dir, un canvi important en el seu somriure. En aquests casos combinem el tractament d'ortodòncia amb un tractament estètic, que ben poden ser les facetes dentals, corones estètiques o un simple emblanquiment dental al final del tractament.")</p>
                    <p class="color-4">@lang("Els laminats són unes làmines que enganxem a la part de fora de les dents per tal d'obtenir el canvi estètic que volem. El fet de millorar la oclusió del pacient amb l'ortodòncia millorarà en moltes ocasions el pronòstic del tractament estètic, permetent mantenir més esmalt en les preparacions dentals i reduint el risc de fractures amb el temps.")</p>
                </div>
                <div class="col-md-12 mt-15">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/ortodoncia-odontopediatria-girona.jpg') }}" alt="Clínica Barroso" class="width-80">
                        <br>
                        <p class="color-4">@lang("Recanvi de corones i facetes en mal estat, previ tractament d'ortodòncia")</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection