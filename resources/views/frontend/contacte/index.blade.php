@extends('frontend.layouts.app')

@section('styles')
    <script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

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
                    <h3>@lang("Contacti amb nosaltres")</h3>
                    <p>@lang("Si desitja contactar amb nosaltres per a qualsevol comentari, consulta o sol·licitud, li posem a disposició un formulari de contacte per poder escriure'ns quan vostè ho necessiti.")</p>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p>@lang("Telèfon")</p> <a href="tel:972208901">972 208 901</a>
                        </div>
                    </div>
                    <div class="reservations mb-30">
                        <div class="icon"><span class="flaticon-envelope"></span></div>
                        <div class="text">
                            <p>@lang("Correu electrònic")</p> <a href="mailto:consultes@clinicabarroso.com">consultes@clinicabarroso.com</a>
                        </div>
                    </div>
                    <div class="reservations">
                        <div class="icon"><span class="flaticon-location-pin"></span></div>
                        <div class="text">
                            <p>@lang("Direcció")</p> Pujada Creu de Palau, 11-13 
                            <br>17003-Girona
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-30 offset-md-1">
                    <h3>@lang("Formulari de contacte")</h3>
                    <form method="post" action="{{ route('frontend.sendMail') }}">
                        @csrf
                        <!-- form message -->
                        @if(session('message_mail'))
                            <div class="alert alert-success contact__msg" role="alert">
                                <b>{{ session('message_mail') }}</b>
                            </div>
                            <br>
                        @endif
                        @if(session('error_message_mail'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error_message_mail') }}
                            </div>
                            <br>
                        @endif
                        <!-- form elements -->
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input name="name" type="text" placeholder="@lang("Nom i cognoms *")" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="email" type="email" placeholder="@lang("Correu electrònic *")" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="phone" type="text" placeholder="@lang("Telèfon *")" required>
                            </div>
                            <div class="col-md-6 form-group">
                                <input name="poblacio" type="text" placeholder="@lang("Població *")" required>
                            </div>
                            <div class="col-md-12 form-group">
                                <textarea name="message" id="message" cols="30" rows="4" placeholder="@lang("Missatge *")" required></textarea>
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="g-recaptcha" data-sitekey="6LeBUB8pAAAAAFih_HuF7BoprVwlCJTjkgEsjmkL" data-callback="enableBtn"></div>
                            </div>
                            <div class="col-md-12">
                                <button class="butn-dark" id="submit_details" type="submit" disabled><a style="color:#FFF;cursor: pointer;"><span>@lang("Enviar")</span></a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-md-12 text-center">
                    <h3>@lang("Mútues adherides")</h3>
                </div>
                <div class="col-md-12 text-center">
                    <img src="{{ asset('frontend/img/mutues.png') }}" class="width-auto">
                </div>
            </div>
            <div class="row mb-60">
                <div class="col-md-12">
                    <h3>@lang("Per què Clínica Barroso és la teva clínica dental de confiança a Girona?")</h3>
                </div>
                <div class="col-md-12 mb-30">
                    <h5>@lang("Compromesos amb la qualitat")</h5>
                    @lang("Apostem per a fer tractaments de qualitat. No prioritzem la quantitat de tractaments fets a la clínica. L'ètica professional i les expectatives de cada pacient són les nostres prioritats.")
                </div>
                <div class="col-md-12 mb-30">
                    <h5>@lang("Una clínica moderna")</h5>
                    @lang("L'odontologia digital i el concepte de dentista digital és relativament nou. A Clínica Barroso emprarem la tecnologia puntera disponible sempre que ens aporti avantatges en la realització del diagnòstic i del propi tractament. La digitalització de molts dels procediments amb l'ús dels escàners intraorals, softwares de planificació o la radiologia digital ens permetrà realitzar tractaments menys invasius, millorant significativament l'experiència del pacient.")
                </div>
                <div class="col-md-12 mb-30">
                    <h5>@lang("Equip altament qualificat i especialitzat")</h5>
                    @lang("En l'equip de Clínica Barroso comptem amb professionals altament especialitzats en les diferents branques de l'odontologia. A part de grans professionals el pacient podrà comprovar en cada visita la seva qualitat humana i el tracte proper.")
                </div>
                <div class="col-md-12 mb-30">
                    <h5>@lang("Fàcil accessibilitat")</h5>
                    @lang("Ubicats al centre de Girona, al barri dels Químics, on tindràs facilitat d'aparcarcament gratuït. En cas d'utilitzar transport públic també podràs utilitzar les línies del bus urbà.")
                </div>
                <div class="col-md-12">
                    <h5>@lang("Finançament a mida")</h5>
                    @lang("Posem a la disposició dels nostres pacients diverses alternatives de finançament personalitzades perquè el factor econòmic no suposi un obstacle a l'hora d'aconseguir una bona salut i estètica dental.")
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

    @section('scripts')
        <script>
            function enableBtn(){
                document.getElementById("submit_details").disabled = false;
            }
        </script>
    @endsection

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Business Central",
            "name": "Clínica Barroso",
            "image": "https://www.clinicabarroso.com/frontend/img/clinica-dental-girona.jpg",
            "description": "Clínica dental Barroso Girona experts en ortodòncia i odontopediatria, implantologia i rehabilitació oral, estètica dental, endodòncia i periodòncia.",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Pujada Creu de Palau, 11-13",
                "postalCode": "17003",
                "addressLocality": "Girona",
                "addressRegion": "Cataluña",
                "addressCountry": "España"
        },
        "openingHours": [
            "Mon-Thu 09:30-20:00",
            "Fr 09:30-13:30"
        ],
            "telephone": "+34972208901"
        }
    </script>
@endsection