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

}
