@extends('frontend.layouts.app')

@section('content')
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="{{ asset('frontend/img/contacte.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    {{-- <h5>Vols demanar una cita?</h5>
                    <h1>Contacte</h1> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner -->
    
    <!-- Contact -->
    <section class="contact section-padding">
        <div class="container">
            <div class="row mb-90">
                <div class="col-md-6 mb-60">
                    <h3>Contacti amb nosaltres</h3>
                    <p>Si desitja contactar amb nosaltres per a qualsevol comentari, consulta o sol·licitud, li posem a disposició i un formulari de contacte per poder escriure'ns quan vostè ho necessiti.</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>Telèfon</p> <a href="tel:972208901">972 208 901</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>Correu electrònic</p> <a href="mailto:info@clinicabarroso.com">info@clinicabarroso.com</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>Direcció</p> Pujada Creu de Palau, 11-13 
                            <br>17003-Girona
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>Formulari de contacte</h3>
                    <form method="post" class="contact__form" action="mail.php">
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success contact__msg" style="display: none" role="alert"> El vostre missatge s'ha enviat correctament </div>
                            </div>
                        </div>
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="Nom i cognoms *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="Correu electrònic *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="Telèfon *" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="subject" type="text" placeholder="Població *" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="Missatge *" required></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="butn-dark"><a href="#0"><span>Enviar</span></a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-md-12 text-center">
                    <h3>Mútues adherides</h3>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/mutues.png') }}" class="width-auto">
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-md-12">
                    <h3>Per què Clínica Barroso és la teva clínica dental de confiança a Girona?</h3>
                </div>
                <div class="col-md-12 mb-30">
                    <h5>Compromesos amb la qualitat</h5>
                    Apostem per a fer tractaments de qualitat. No prioritzem la quantitat de tractaments fets a la clínica. La ètica professional i les expectatives de cada pacient son les nostres prioritats.
                </div>
                <div class="col-md-12 mb-30">
                    <h5>Una clínica moderna</h5>
                    L'odontologia digital i el concepte de dentista digital és relativament nou. A Clínica Barroso emprarem la tecnologia puntera disponible sempre que ens aporti avantatges en la realització del diagnòstic i del propi tractament. La digitalització de molts dels procediments amb l'ús dels escàners intraorals, softwares de planificació o la radiologia digital ens permetrà realitzar tractaments menys invasius, millorant significativament l'experiència del pacient.
                </div>
                <div class="col-md-12 mb-30">
                    <h5>Equip altament qualificat i especialitzat</h5>
                    En l'equip de Clínica Barroso comptem amb professionals altament especialitzats en les diferents branques de l'odontologia. A part de grans professionals el pacient podrà comprovar en cada visita la seva qualitat humana i el tracte proper.
                </div>
                <div class="col-md-12 mb-30">
                    <h5>Fàcil accessibilitat</h5>
                    Ubicats al centre de Girona, al barri dels Químics, on tindràs facilitat d'aparcarcament gratuït. En cas d'utilitzar transport públic també podràs utilitzar les línies del bus urbà.
                </div>
                <div class="col-md-12">
                    <h5>Finançament a mida</h5>
                    Posem a la disposició dels nostres pacients diverses alternatives de finançament personalitzades perquè el factor econòmic no suposi un obstacle a l'hora d'aconseguir una bona salut i estètica dental.
                </div>
            </div>
            <!-- Map Section -->
            <div class="row">
                <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5933.066452391385!2d2.821158!3d41.96736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bae6d4448da7eb%3A0xe87c17e76c5d66!2sBARROSO%20CL%C3%8DNICA%20DENTAL!5e0!3m2!1ses!2sus!4v1692953869786!5m2!1ses!2sus" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
@endsection