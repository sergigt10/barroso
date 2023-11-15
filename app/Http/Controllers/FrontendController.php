<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Clínica Barroso, Implants Girona, Clínica dental Girona');

        return view('frontend.inici.index');
    }

    public function nosaltres()
    {
        SEOTools::setTitle('Clínica dental, periodoncia Girona, Odontopediatria Girona');
        SEOTools::setDescription("Benvinguts a Clínica Dental Barroso des de l'any 1949 hem estat vetllant per la seva salut dental i avuí dia seguim amb la mateixa il·lusió amb la qual vam començar.");

        return view('frontend.nosaltres.index');
    }

    public function clinica()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.clinica.index');
    }

    public function ortodoncia()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.ortodoncia.index');
    }

    public function periodoncia()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.periodoncia.index');
    }

    public function implantologia()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.implantologia.index');
    }

    public function protesis()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.protesis.index');
    }

    public function endodoncia()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.endodoncia.index');
    }

    public function odontopediatria()
    {
        SEOTools::setTitle('Clínica Dental');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.odontopediatria.index');
    }

    public function testimonials()
    {
        SEOTools::setTitle('Testimonials');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.testimonials.index');
    }

    public function contacte()
    {
        SEOTools::setTitle('Contacte');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.contacte.index');
    }

    public function historia()
    {
        SEOTools::setTitle('Historia');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.historia.index');
    }

    public function dentista()
    {
        SEOTools::setTitle('Dentista Girona');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.dentistaGirona.index');
    }

    public function disseny()
    {
        SEOTools::setTitle('Disseny Somriures');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.dissenySomriures.index');
    }

    public function invisalign()
    {
        SEOTools::setTitle('Invisalign Girona');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.invisalign.index');
    }

    public function implantsQualitat()
    {
        SEOTools::setTitle('Implants de qualitat');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.implantsQualitat.index');
    }

    public function odontologia()
    {
        SEOTools::setTitle('Implants de qualitat');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.odontologia.index');
    }

    public function ortodonciaOdontopediatria()
    {
        SEOTools::setTitle('Implants de qualitat');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.ortodonciaOdontopediatria.index');
    }

}
