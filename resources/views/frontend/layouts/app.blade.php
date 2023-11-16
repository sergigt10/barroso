<!DOCTYPE html>
<html lang="{{ Config::get('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        {!! SEO::generate() !!}

        <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.png') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow&family=Barlow+Condensed&family=Gilda+Display&display=swap">
        <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}" />
        <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    </head>
    <body>
        <!-- Preloader -->
        <div class="preloader-bg"></div>
        <div id="preloader">
            <div id="preloader-status">
                <div class="preloader-position loader"> <span></span> </div>
            </div>
        </div>
        <!-- Progress scroll totop -->
        <div class="progress-wrap cursor-pointer">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo -->
                @if ( url()->current() !== 'http://www.clinicabarroso.com/'.Config::get('app.locale').'/contacte' )
                    <div class="logo-wrapper navbar-brand valign">
                        <a href="{{ route('frontend.inici.index') }}">
                            <div class="logo">
                                <img src="{{ asset('frontend/img/logo-cat-blanc.svg') }}" class="logo-img" alt="Clínica Barroso">
                            </div>
                        </a>
                    </div>
                @endif
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="ti-line-double"></i></span> </button>
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        @if ( url()->current() === 'http://www.clinicabarroso.com/'.Config::get('app.locale').'/contacte' )
                            <li class="nav-item"><a class="nav-link" href="{{ route('frontend.inici.index') }}">INCI</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.nosaltres.index') }}">NOSALTRES</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.clinica.index') }}">CLÍNICA</a></li>
                        <li class="nav-item dropdown"> 
                            <span class="nav-link"> 
                                TRACTAMENTS <i class="ti-angle-down"></i>
                            </span>
                            <ul class="dropdown-menu last">
                                <li class="dropdown-item"><a href="{{ route('frontend.ortodoncia.index') }}">ORTODÒNCIA</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.periodoncia.index') }}">PERIODÒNCIA</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.implantologia.index') }}">IMPLANTOLOGÍA</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.protesis.index') }}">PRÒTESI I ESTÈTICA</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.endodoncia.index') }}">ENDODÒNCIA</a></li>
                                <li class="dropdown-item"><a href="{{ route('frontend.odontopediatria.index') }}">ODONTOPEDIATRIA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.testimonials.index') }}">TESTIMONIALS</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.contacte.index') }}">CONTACTE</a></li>
                        <li class="nav-item dropdown"> 
                            <span class="nav-link"> {{ LaravelLocalization::getCurrentLocale() }} <i class="ti-angle-down"></i></span>
                            <ul class="dropdown-menu last">
                                {{-- @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                    <li class="dropdown-item">
                                        <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            {{ $properties['native'] }}
                                        </a>
                                    </li>
                                @endforeach --}}
                                <li class="dropdown-item"><a href="#">Español</a></li>
                                <li class="dropdown-item"><a href="#">English</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

            @yield('content')

        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-column footer-about">
                                <h3 class="footer-title">Horaris</h3>
                                <p class="footer-about-text">
                                    De dilluns a dijous<br>Matins: 9:30h a 13:30h<br>Tardes: 16:00h a 20:00h<br>Divendres de: 9:30h a 13:30h
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1">
                            <div class="footer-column footer-explore clearfix">
                                <h3 class="footer-title">Menú</h3>
                                <ul class="footer-explore-list list-unstyled">
                                    <li><a href="{{ route('frontend.inici.index') }}">Inici</a></li>
                                    <li><a href="{{ route('frontend.nosaltres.index') }}">Nosaltres</a></li>
                                    <li><a href="{{ route('frontend.clinica.index') }}">La clínica</a></li>
                                    <li><a href="{{ route('frontend.testimonials.index') }}">Testimonials</a></li>
                                    <li><a href="{{ route('frontend.contacte.index') }}">Contacte</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="footer-column footer-contact">
                                <h3 class="footer-title">Contacte</h3>
                                <p class="footer-contact-text">Pujada Creu de Palau, 11-13<br>17003-Girona</p>
                                <div class="footer-contact-info">
                                    <p class="footer-contact-phone">
                                        <span class="flaticon-call"></span> 972 208 901
                                    </p>
                                    <p class="footer-contact-mail">
                                        info@clinicabarroso.com
                                    </p>
                                </div>
                                <div class="footer-about-social-list">
                                    <a href="https://www.instagram.com/clinicabarroso/"><i class="ti-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-bottom-inner">
                                <p class="footer-bottom-copy-right">
                                    Disseny web <a href="https://www.webmastervic.com/" target="_blank">webmastervic.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <style>
            #myBtn {
                display: none;
                position: fixed;
                bottom: 20px;
                left: 20px;
                z-index: 99;
                font-size: 18px;
                border: none;
                outline: none;
                background-color: transparent;
                color: #29b200;
                cursor: pointer;
                padding: 15px;
                border-radius: 4px;
            }
            #myBtn:hover {
                background-color: transparent;
            }
        </style>
        <button onclick="topFunction()" id="myBtn" title="WhatsApp Clínica dental Barroso"><img src="{{ asset('frontend/img/whats.png') }}"></button>
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");
            
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
                } else {
                mybutton.style.display = "none";
                }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                window.open('https://wa.me/34606103258?text=Hola', '_blank');
            }
        </script>
        <!-- jQuery -->
        <script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
        <script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
        <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.isotope.v3.0.2.js') }}"></script>
        <script src="{{ asset('frontend/js/pace.js') }}"></script>
        <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend/js/scrollIt.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('frontend/js/jquery.magnific-popup.js') }}"></script>
        <script src="{{ asset('frontend/js/YouTubePopUp.js') }}"></script>
        <script src="{{ asset('frontend/js/select2.js') }}"></script>
        <script src="{{ asset('frontend/js/datepicker.js') }}"></script>
        <script src="{{ asset('frontend/js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('frontend/js/custom.js') }}"></script>

        @yield('scripts')

    </body>
</html>