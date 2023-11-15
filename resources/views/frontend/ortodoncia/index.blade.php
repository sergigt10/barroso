@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/barroso-ortodoncia-girona.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Ortodòncia</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing section-padding bg-black" style="padding-bottom: 20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-2">És l'especialitat que té com a finalitat la correcció de la posició de les dents i el control del creixement dels maxil•lars amb l'objectiu d'aconseguir no solzament una correcta alineació dental, si no també restablir l'equilibri funcional de la boca i millorar l'harmonia facial.</p>
                    <p class="color-2">Abans d'iniciar el tractament ortodòntic, realitzem un estudi dels problemes funcionals, dentals i estètics del pacient. l'estudi d' ortodòncia és imprescindible per poder oferir el millor pla de tractament individualitzat. L'ortodoncista ha de dedicar temps i recursos per analitzar cada cas i obtenir un diagnòstic complet. Els registres que utilitzem són:</p>
                    <p class="color-2">
                        - Fotografies intraorals<br>
                        - Fotografies frontal i de perfil (en repòs i somriure natural)<br>
                        - Models digitals de la boca realizats amb l'escàner intraoral<br>
                        - Dues radiografies: l'ortopantomografia i la radiografia lateral de crani<br>
                        - Proves complementàries com el TAC dental segons el cas
                    </p>
                    <br>
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/odontologia-avancada-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
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
                    <p><b>Ortodòncia invisible</b></p>
                    <p class="color-4">L'ortodòncia invisible és un sistema d'ortodòncia estètica per a aquelles persones que necessiten alinear-se les dents, però que per motius personals o professionals volen que els seus aparells no siguin visibles. Per a això, s'utilitzen una seqüència d'alineadors transparents que a poc a poc van corregint la posició de les dents. Un gran avantatge és que te'ls pots treure per menjar o rentar-te les dents, la qual cosa ofereix una major comoditat i higiene.<br><br>Els alineadors són fabricats individualment per a cada pacient a partir d'una planificació digital realitzada per la Dra. Barroso.</p>
                </div>
                <div class="col-md-6">
                    <br>
                    <img src="{{ asset('frontend/img/odontologia-invisible-girona.jpg') }}" alt="Clínica Barroso">
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><b>Ortodòncia infantil</b></p>
                    <p><b>Quan recomanem realitzar la primera visita amb l'ortodoncista?</b></p>
                    <p class="color-4">Recomanem la primera visita amb l'ortodoncista al voltant dels 6 anys. A aquesta edat i inclús abans podem detectar mals hàbits com són la respiració oral, succió del dit i del xumet, mala col.locació de la llengua… El diagnòstic precoç ens evitarà futurs problemes en el creixement dels maxil.lars.</p>
                </div>
                <div class="col-md-12 mt-15">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/ortodoncia-girona-1.jpg') }}" alt="Clínica Barroso" class="width-auto">
                    </div>
                </div>
                <div class="col-md-12 mt-30">
                    <p class="color-4">
                        Les grans avantatges de l'ortodòncia infantil són:<br>
                        · Millorar la malposició de les dents evitant tractaments més complexes i més llargs en un futur<br>
                        · Afavorir un correcte creixement simètric dels maxil.lars<br>
                        · Millorar la respiració del nen/a en els casos on realitzem una expansió del paladar<br>
                        · Millorar múltiples funcions com són la parla i la masticació<br>
                    </p>
                </div>
                <div class="col-md-12 mt-15">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/ortodoncia-girona-cas-1.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-4"><b>Cas 1.</b> Abans-després d'un tractament d'expansió del paladar realitzat en una nena de 7 anys.</p>
                        <br>
                        <img src="{{ asset('frontend/img/ortodoncia-girona-cas-2.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-4"><b>Cas 2.</b> Abans-després d'un tractament d'expansió del paladar realitzat en un nen de 8 anys.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><b>Ortodòncia amb brackets damon</b></p>
                    <p class="color-4">Una altra opció per alinear les dents és mitjançant els anomenats "ferros" que més tècnicament anomenem brackets. Existeixen diversos tipus de brackets:<br>
                        · Els brackets tradicionals: utilitzen gomes per subjectar els arcs<br>
                        · Els brackets d'autolligat Damon: no necessiten gomes per subjectar els arcs
                    </p>
                </div>
                <div class="col-md-12 mt-15 text-center">
                    <img src="{{ asset('frontend/img/odontologia-avancada-brackets.jpg') }}" alt="Clínica Barroso" style="width: 50%;">
                </div>
                <div class="col-md-12 mt-30">
                    <p class="color-4">
                        A Clínica Barroso utilitzem els brackets Damon perquè ens ofereixen una sèrie d'avantatges respecte als brackets tradicionals. El fet d'utilizar un bracket d'alta qualitat i tecnologia ens permet:<br>
                        · Una millora de l'estètica facial al crear un somriure més ampli<br>
                        · Més comoditat pel pacient al produir-se moviments més suaus de les dents. Es noten menys les forces<br>
                        · Disminució de l'acumulació de bactèries al no portar gomes al voltant dels brackets, i conseqüentment una millor higiene dental<br>
                    </p>
                </div>
                <div class="col-md-12 mt-15">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/ortodoncia-girona-cas-3.jpg') }}" alt="Clínica Barroso" class="width-auto">
                        <br>
                        <p class="color-4"><b>Cas 3.</b> Abans-després d'un tractament d'ortodòncia realitzat amb brackets Damon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><b>Casos complexes tractats amb microcargols</b></p>
                    <p class="color-4">L'oclusió és la correcta relació entre les dents de dalt i les de baix.  Algunes funcions com són la parla i la masticació es poden veure afectades a causa d'una maloclusió.<br><br>
                    De vegades per solucionar determinades maloclusions és necessari l'ús de tècniques més complexes i per tant un coneixement específic sobre aquest tipus de tractaments. Una d'aquestes tècniques és l'ús dels microcargols. Es tracten de petites fixacions que col.loquem temporalment en els ossos maxil.lar i mandibular. La seva funció es generar forces addicionals per tal d'aconseguir moviments més precisos de les dents.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing section-padding bg-cream" style="padding-bottom: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><b>Ortodòncia combinada amb cirurgia maxil.lofacial</b></p>
                    <p class="color-4">És la modalitat d'ortodòncia pels pacients adults que ja han acabat el seu creixement i que presenten una maloclusió severa on s'ha de modificar la posició dels ossos maxil.lars.</p>
                    <p class="color-4">Amb l'ortodòncia primer posicionem correctament les dents dins del maxil.lar i mandíbula, i seguidament amb la cirurgia es col.loquen bé els ossos per tal d'aconseguir un bon engranatge de les dents, a més a més de millorar l'estètica facial i la funció masticatòria.</p>
                </div>
                <div class="col-md-12 mt-15">
                    <div class="text-center">
                        <img src="{{ asset('frontend/img/ortodoncia-girona-cas-4.jpg') }}" alt="Clínica Barroso" class="width-80">
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
    </section>
@endsection