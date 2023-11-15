@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/disseny-somrriures.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Emprova't el teu somriure</h5>
                    <h1>Disseny de somriures</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="pricing section-padding bg-black">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="color-2">Somriure es un acte instintiu, natural i fins i tot beneficiós per la salut. Avui dia és un dels trets distintius dels humans més important. De fet, els cànons de bellesa donen gran importància a unes dents blanques i ben col·locades.</p>
                    <p class="color-2">En el disseny d'un somriure és molt important fer un correcte diagnòstic per aconseguir els resultats que més satisfacin les expectatives del pacient. En aquesta fase diagnòstica, amés, es podrà mostrar al pacient el resultat estètic previst abans de començar (prova mock-up). Un cop recopilada tota la informació necessària (fotografies, radiografies o models d'estudi) es podrà començar el tractament que pot requerir la implicació de diferents especialitats: ortodòncia, cirurgia, periodòncia o pròtesi.<br><br>En el disseny d'un somriure s'intenta utilitzar materials lliures de metall, per donar un aspecte més natural a la rehabilitació, en altres paraules, que es mimetitzi o integri més amb la resta de la boca o la cara del pacient. S'utilitzen per aquests objectius les facetes ceràmiques, corones totalment ceràmiques, o en casos més avançats rehabilitacions estètiques amb implants.<br><br>Per a més informació els doctors de Clínica Barroso el podran assessorar personalment.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="team section-padding bg-cream">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="beforeAfter">
                        <img src="{{ asset('frontend/img/somriures/foto-1-a.jpg') }}" alt="Clínica Barroso"/>
                        <img src="{{ asset('frontend/img/somriures/foto-1-b.jpg') }}" alt="Clínica Barroso"/>
                    </div>
                    <span><strong>Cas 1.</strong> Rehabilitació estètica amb una combinació de facetes ceràmiques, implants i fundes.</span>
                </div>
                <div class="col-md-6">
                    <div class="beforeAfter">
                        <img src="{{ asset('frontend/img/somriures/foto-2-a.jpg') }}" alt="Clínica Barroso"/>
                        <img src="{{ asset('frontend/img/somriures/foto-2-b.jpg') }}" alt="Clínica Barroso"/>
                    </div>
                    <span><strong>Cas 2.</strong> Correcció del somriure invertit amb laminats ceràmics.</span>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="beforeAfter">
                        <img src="{{ asset('frontend/img/somriures/foto-4-a.jpg') }}" alt="Clínica Barroso"/>
                        <img src="{{ asset('frontend/img/somriures/foto-4-b.jpg') }}" alt="Clínica Barroso"/>
                    </div>
                    <span><strong>Cas 3.</strong>  Tractament d'ortodòncia de pacient amb un apinyament dental sever.</span>
                </div>
                <div class="col-md-6">
                    <div class="beforeAfter">
                        <img src="{{ asset('frontend/img/somriures/foto-3-a.jpg') }}" alt="Clínica Barroso"/>
                        <img src="{{ asset('frontend/img/somriures/foto-3-b.jpg') }}" alt="Clínica Barroso"/>
                    </div>
                    <span><strong>Cas 4.</strong>  Rehabilitació oral total amb pròtesis fixes sobre implants dentals.</span>
                </div>
            </div>
        </div>
    </section>

    @section('scripts')
        <!-- https://www.jqueryscript.net/other/before-after-image-viewer.html -->
        <script src="{{ asset('frontend/js/beforeafter.jquery-1.0.0.min.js') }}"></script>
        <script>
            $('.beforeAfter').beforeAfter({
                movable: true,
                clickMove: true,
                position: 50,
                separatorColor: '#fafafa',
                bulletColor: '#fafafa',
                onMoveStart: function(e) {
                    console.log(event.target);
                },
                onMoving: function() {
                    console.log(event.target);
                },
                onMoveEnd: function() {
                    console.log(event.target);
                },
            });
        </script>
    @endsection

@endsection