@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/barroso-implants.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h1>Evolució constant</h1>
                </div>
            </div>
        </div>
    </div>
    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section-title"><span>Implantologia i estètica</span></div>
                    <p class="color-2">El món avança ràpidament. El coneixement i l'aplicació d'aquest evoluciona constantment. Per tant seria difícil comparar l'odontologia actual amb la que es feia fa 50 anys, fa 20 anys, o inclús fa 10 anys. En aquest sentit, la implementació d' una odontologia “moderna” i avançada aporta grans beneficis als nostres pacients.</p>
                    <p class="color-2">Fins fa uns anys l'objectiu principal que buscava la implantologia era recuperar la funció oral del pacient. Actualment s' ha convertit en quelcom més elaborat que això, ja que el resultat estètic o integració natural del tractament en la boca / cara del pacient ha assolit la mateixa importància que la funció. Tanmateix, és important que el tractament es mantingui estable amb el pas del temps i que sigui durador, per això serà molt important un cop finalitzat el tractament seguir les instruccions de manteniment i tenir cura exquisita de la higiene.</p>
                    <div class="reservations mb-30">
                    </div>
                </div>
                <div class="col-md-6">
                    <br>
                    <img src="{{ asset('frontend/img/implantologia.jpg') }}" alt="Clínica Barroso">
                </div>
            </div>
        </div>
    </section>
    <section class="pricing section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="color-4">En moltes ocasions la realització de procediments mínimament invasius, els quals requereixen un bon entrenament i un alt grau d'especialització, ens permetran assolir aquests objectius amb més facilitat, a la vegada que disminuirà moltíssim el desconfort postoperatori del pacient i el temps total de tractament. Així ho hem demostrat en algunes publicacions científiques escrites pel Dr. Albert Barroso i publicades en revistes internacionals.</p>
                    <p class="color-4">Estem compromesos en la realització dels tractaments més efectius i que provoquin les mínimes molèsties post-operatòries, compaginat a la vegada amb un treball constant de recerca en el camp de la implantologia estètica.<br><br> 
                    Paral.lelament a l'atenció dels pacients a la clínica, el Dr. Albert Barroso realitza tasques d'investigació relacionades amb la implantologia de la qual se n'han derivat diverses publicacions científiques internacionals. *** Compartir els resultats d' aquestes investigacions ha sigut motiu de presentacions tant en congressos nacionals com internacionals.<br><br>
                    A part, imparteix docència a la facultat d' odontologia i en cursos de formació continuada.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend/img/implantologia2.jpg') }}" alt="Clínica Barroso">
                    <br><br>
                    <img src="{{ asset('frontend/img/implantologia3.jpg') }}" alt="Clínica Barroso">
                </div>
                <div class="col-md-12">
                    <p style="font-size: 15px;">*** articles publicats pel Dr. Albert Barroso</p>
                    <p style="font-size: 15px;">*** Barroso-Panella A., Lucas E., Lazaro A. Preservación, implante inmediato o protocolo diferido: toma de decisiones en el sector estético. Periodoncia Clínica 2016.</p>
                    <p style="font-size: 15px;">*** Elnayef B, Barroso-Panella A., Abdeslam Y., Hernández-Alfaro F. Reconstrucción del reborde alveolar atrófico con malla de titanio en la zona estética. Periodoncia Clínica 2016.</p>
                    <p style="font-size: 15px;">*** Barroso-Panella A., Gargallo-Albiol J. Hernández-Alfaro F. Evaluation of bone stability and esthetic results after immediate implant placement using a novel synthetic bone substitue in the anterior zone: results after 12 months. Int JPeriodontics Restorative Dent 2018.</p>
                    <p style="font-size: 15px;">*** Barroso-Panella A., Ortiz-Puigpelat O., Altuna-Fistolera P., Lucas-Taulé E., Hernández-Alfaro F., Gargallo-Albiol J. Evaluation of periimplant tissue stability and patient's satisfaction after immediate implant placement in the aesthetic area. A 3-year follow-up study of an on-going prospective study. Int JPeriodontics Restorative Dent 2020.</p>
                    <p style="font-size: 15px;">*** Ortiz Puigpelat, O., Barroso, A., Altuna, P., Quevedo, M., Hernandez Alfaro, F. The Screen technique for safe bone regeneration of noncontained defects: a novel technique. International journal of periodontics and restorative dentistry, vol. 41, No. 6, pp. 856-862 2021</p>
                    <p style="font-size: 15px;">*** Altuna P, Fernández Villar S., Barroso-Panella A., Ortiz-Puigpelat O., Hernández-Alfaro F., Nart J. Narrow diameter titanium-zirconium tissue-level implants supporting multi-unit FDPs in the anterior area: A 5-year prospective study. Clin Oral Implants Res.  2023 Jul;34(7):751-767.</p>
                </div>
            </div>
        </div>
    </section>
@endsection