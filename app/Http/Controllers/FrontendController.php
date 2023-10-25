<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Clínica Barroso');

        return view('frontend.inici.index');
    }

    public function nosaltres()
    {
        SEOTools::setTitle('Nosaltres');

        return view('frontend.nosaltres.index');
    }

    public function clinica()
    {
        SEOTools::setTitle('Clínica Dental');

        return view('frontend.clinica.index');
    }

    public function testimonials()
    {
        SEOTools::setTitle('Testimonials');

        return view('frontend.testimonials.index');
    }

    public function contacte()
    {
        SEOTools::setTitle('Contacte');

        return view('frontend.contacte.index');
    }

    public function historia()
    {
        SEOTools::setTitle('Historia');

        return view('frontend.historia.index');
    }

    public function dentista()
    {
        SEOTools::setTitle('Dentista Girona');

        return view('frontend.dentistaGirona.index');
    }

    public function disseny()
    {
        SEOTools::setTitle('Disseny Somriures');

        return view('frontend.dissenySomriures.index');
    }

    public function invisalign()
    {
        SEOTools::setTitle('Invisalign Girona');

        return view('frontend.invisalign.index');
    }

    public function implantsQualitat()
    {
        SEOTools::setTitle('Implants de qualitat');

        return view('frontend.implantsQualitat.index');
    }

}
