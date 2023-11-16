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
        SEOTools::setTitle('Clínica dental, periodòncia Girona, Odontopediatria Girona');
        SEOTools::setDescription("La confiança depositada per a milers de pacients durant més de 70 anys d'activitat, la converteix en una clínica dental de referència a Girona.");

        return view('frontend.nosaltres.index');
    }

    public function clinica()
    {
        SEOTools::setTitle('Clínica dental Girona, Clínica Barroso, Dentista Girona');
        SEOTools::setDescription("Som una clínica dental amb una llarga tradició familiar, ubicada a Girona des de l'any 1949. Clínica Barroso Odontologia avançada.");

        return view('frontend.clinica.index');
    }

    public function ortodoncia()
    {
        SEOTools::setTitle('Ortodoncia girona, Endodòncia Girona, Implants Girona');
        SEOTools::setDescription("És l'especialitat que té com a finalitat la correcció de la posició de les dents i el control del creixement dels maxil·lars.");

        return view('frontend.ortodoncia.index');
    }

    public function periodoncia()
    {
        SEOTools::setTitle('Periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("La periodòncia és l'especialitat de l'odontologia que diagnostica i tracta els problemes dels teixits que donen suport a les dents (genives).");

        return view('frontend.periodoncia.index');
    }

    public function implantologia()
    {
        SEOTools::setTitle('Implants Girona, periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("Els implants dentals han revolucionat l'odontologia dels últims 40 anys, permetent millorar la qualitat de vida de moltes persones.");

        return view('frontend.implantologia.index');
    }

    public function protesis()
    {
        SEOTools::setTitle('Protesis dental Girona, Protesis Girona, Implants Girona');
        SEOTools::setDescription("La pròtesi dental substitueix les estructures dentals perdudes o deteriorades retornant a la boca tota la funcionalitat, resistència i estètica.");

        return view('frontend.protesis.index');
    }

    public function endodoncia()
    {
        SEOTools::setTitle('Endodòncia Girona, Endodòncia, Implants Girona');
        SEOTools::setDescription("L'endodòncia és la part de l'odontologia que s'ocupa del diagnòstic i tractament de les malalties de les dents que afecten la polpa dental (el nervi).");

        return view('frontend.endodoncia.index');
    }

    public function odontopediatria()
    {
        SEOTools::setTitle('Odontopediatria Girona, Invisalign Girona');
        SEOTools::setDescription("Recomanem la primera visita al voltant de l'any de vida, quan ja han erupcionat les primeres dents de llet. A la visita donem les pautes als pares.");

        return view('frontend.odontopediatria.index');
    }

    public function testimonials()
    {
        SEOTools::setTitle('Clínica dental, periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");

        return view('frontend.testimonials.index');
    }

    public function contacte()
    {
        SEOTools::setTitle('Casos clínics Girona, Dentista Girona, Odontopediatria Girona');
        SEOTools::setDescription("Donem molta importància a que puguis sentir-te còmode, relaxat i confiat durant tot el tractament a la clínica dental Barroso.");

        return view('frontend.contacte.index');
    }

    public function historia()
    {
        SEOTools::setTitle('Clínica Barroso, Dentista Girona, Clínica dental Girona');
        SEOTools::setDescription("Clínica dental Barroso Girona compta amb una llarga tradició de dedicació a l'odontología, solucionant els problemes bucodentals de milers de pacients.");

        return view('frontend.historia.index');
    }

    public function dentista()
    {
        SEOTools::setTitle('Implants Girona, Dentista Girona, Ortodòncia Girona');
        SEOTools::setDescription("Els doctors Albert i Cristina Barroso, atendran i escoltaran les necessitats de cada pacient durant la primera visita a la Clínica dental Barroso Girona.");

        return view('frontend.dentistaGirona.index');
    }

    public function disseny()
    {
        SEOTools::setTitle('Periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("Somriure es un acte instintiu, natural i fins i tot beneficiós per la salut. Avui dia és un dels trets distintius dels humans més important.");

        return view('frontend.dissenySomriures.index');
    }

    public function invisalign()
    {
        SEOTools::setTitle('Invisalign Girona, Clínica Barroso, Dentista Girona');
        SEOTools::setDescription("Els doctors Albert i Cristina Barroso, atendran i escoltaran les necessitats de cada pacient durant la primera visita a la Clínica dental Barroso Girona.");

        return view('frontend.invisalign.index');
    }

    public function implantsQualitat()
    {
        SEOTools::setTitle('Invisalign Girona, Implants Girona, Dentista Girona');
        SEOTools::setDescription("Estem compromesos en la realització dels tractaments més efectius i que provoquin les mínimes molèsties post-operatòries.");

        return view('frontend.implantsQualitat.index');
    }

    public function odontologia()
    {
        SEOTools::setTitle('Odontologia avançada Girona, Clínica dental Girona');
        SEOTools::setDescription("En presentar-se un problema bucal, un diagnòstic adequat, així com la correcta elaboració d'un pla de tractament són imprescindibles.");

        return view('frontend.odontologia.index');
    }

    public function ortodonciaOdontopediatria()
    {
        SEOTools::setTitle('Ortodòncia Girona, Estètica dental Girona, Clínica Barroso Girona');
        SEOTools::setDescription("Molts pacients que abans no es plantejaven un tractament d'ortodòncia per motius estètics, ara tenen més opcions alhora de decidir.");

        return view('frontend.ortodonciaOdontopediatria.index');
    }

}
