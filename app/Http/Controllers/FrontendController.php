<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOTools;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        SEOTools::setTitle('Clínica Barroso, Implants Girona, Clínica dental Girona');
        SEOTools::setDescription("Clínica dental Barroso Girona experts en ortodòncia i odontopediatria, implantologia i rehabilitació oral, estètica dental, endodòncia i periodòncia.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/');

        return view('frontend.inici.index');
    }

    public function nosaltres()
    {
        SEOTools::setTitle('Clínica dental, periodòncia Girona, Odontopediatria Girona');
        SEOTools::setDescription("La confiança depositada per a milers de pacients durant més de 70 anys d'activitat, la converteix en una clínica dental de referència a Girona.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/nosaltres');

        return view('frontend.nosaltres.index');
    }

    public function clinica()
    {
        SEOTools::setTitle('Clínica dental Girona, Clínica Barroso, Dentista Girona');
        SEOTools::setDescription("Som una clínica dental amb una llarga tradició familiar, ubicada a Girona des de l'any 1949. Clínica Barroso Odontologia avançada.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/clinica-dental-girona');

        return view('frontend.clinica.index');
    }

    public function ortodoncia()
    {
        SEOTools::setTitle('Ortodoncia girona, Endodòncia Girona, Implants Girona');
        SEOTools::setDescription("És l'especialitat que té com a finalitat la correcció de la posició de les dents i el control del creixement dels maxil·lars.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/ortodoncia-girona');

        return view('frontend.ortodoncia.index');
    }

    public function periodoncia()
    {
        SEOTools::setTitle('Periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("La periodòncia és l'especialitat de l'odontologia que diagnostica i tracta els problemes dels teixits que donen suport a les dents (genives).");
        SEOTools::setCanonical('https://www.clinicabarroso.com/periodoncia-girona');

        return view('frontend.periodoncia.index');
    }

    public function implantologia()
    {
        SEOTools::setTitle('Implants Girona, periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("Els implants dentals han revolucionat l'odontologia dels últims 40 anys, permetent millorar la qualitat de vida de moltes persones.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/implantologia-girona');

        return view('frontend.implantologia.index');
    }

    public function protesis()
    {
        SEOTools::setTitle('Protesis dental Girona, Protesis Girona, Implants Girona');
        SEOTools::setDescription("La pròtesi dental substitueix les estructures dentals perdudes o deteriorades retornant a la boca tota la funcionalitat, resistència i estètica.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/protesis-dental-girona');

        return view('frontend.protesis.index');
    }

    public function endodoncia()
    {
        SEOTools::setTitle('Endodòncia Girona, Endodòncia, Implants Girona');
        SEOTools::setDescription("L'endodòncia és la part de l'odontologia que s'ocupa del diagnòstic i tractament de les malalties de les dents que afecten la polpa dental (el nervi).");
        SEOTools::setCanonical('https://www.clinicabarroso.com/endodoncia-girona');

        return view('frontend.endodoncia.index');
    }

    public function odontopediatria()
    {
        SEOTools::setTitle('Odontopediatria Girona, Invisalign Girona');
        SEOTools::setDescription("Recomanem la primera visita al voltant de l'any de vida, quan ja han erupcionat les primeres dents de llet. A la visita donem les pautes als pares.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/odontopediatria-girona');

        return view('frontend.odontopediatria.index');
    }

    public function testimonials()
    {
        SEOTools::setTitle('Clínica dental, periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("No t'ho pensis més i gaudeix de tots els beneficis de tenir una boca sana i bonica. Vine a la nostra clínica dental de Badalona");
        SEOTools::setCanonical('https://www.clinicabarroso.com/testimonials');

        return view('frontend.testimonials.index');
    }

    public function contacte()
    {
        SEOTools::setTitle('Casos clínics Girona, Dentista Girona, Odontopediatria Girona');
        SEOTools::setDescription("Donem molta importància a que puguis sentir-te còmode, relaxat i confiat durant tot el tractament a la clínica dental Barroso.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/contacte');

        return view('frontend.contacte.index');
    }

    public function sendEmail(Request $request){

        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'poblacio' => $request->poblacio,
            'message' => $request->message
        ];

        $AdminMessage  = "Formulari de contacte WEB\n\n";
        $AdminMessage .= "Nom i cognoms: ".utf8_decode($data['name'])."\n";
        $AdminMessage .= "Email: ".utf8_decode($data['email'])."\n";
        $AdminMessage .= "Tlf.: ".utf8_decode($data['phone'])."\n";
        $AdminMessage .= "Pobl.: ".utf8_decode($data['poblacio'])."\n";
        $AdminMessage .= "Missatge: ".utf8_decode($data['message'])."\n";
    
        mail("info@clinicabarroso.com", "Formulari de contacte WEB", $AdminMessage);

        // Mail::to('info@clinicabarroso.com')->send(new ContactMail($data));

        return back()->with(['message_mail' => trans('Missatge enviat correctament! En breu ens posarem en contacte. Gràcies')]);

    }

    public function historia()
    {
        SEOTools::setTitle('Clínica Barroso, Dentista Girona, Clínica dental Girona');
        SEOTools::setDescription("Clínica dental Barroso Girona compta amb una llarga tradició de dedicació a l'odontología, solucionant els problemes bucodentals de milers de pacients.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/historia');

        return view('frontend.historia.index');
    }

    public function dentista()
    {
        SEOTools::setTitle('Implants Girona, Dentista Girona, Ortodòncia Girona');
        SEOTools::setDescription("Els doctors Albert i Cristina Barroso, atendran i escoltaran les necessitats de cada pacient durant la primera visita a la Clínica dental Barroso Girona.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/dentista-girona');

        return view('frontend.dentistaGirona.index');
    }

    public function disseny()
    {
        SEOTools::setTitle('Periodòncia Girona, Endodòncia Girona');
        SEOTools::setDescription("Somriure es un acte instintiu, natural i fins i tot beneficiós per la salut. Avui dia és un dels trets distintius dels humans més important.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/disseny-somriures');

        return view('frontend.dissenySomriures.index');
    }

    public function odontologia()
    {
        SEOTools::setTitle('Odontologia avançada Girona, Clínica dental Girona');
        SEOTools::setDescription("En presentar-se un problema bucal, un diagnòstic adequat, així com la correcta elaboració d'un pla de tractament són imprescindibles.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/odontologia-avancada-girona');

        return view('frontend.odontologia.index');
    }

    public function invisalign()
    {
        SEOTools::setTitle('Invisalign Girona, Clínica Barroso, Dentista Girona');
        SEOTools::setDescription("Els doctors Albert i Cristina Barroso, atendran i escoltaran les necessitats de cada pacient durant la primera visita a la Clínica dental Barroso Girona.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/invisalign-girona');

        return view('frontend.invisalign.index');
    }

    public function implantsQualitat()
    {
        SEOTools::setTitle('Invisalign Girona, Implants Girona, Dentista Girona');
        SEOTools::setDescription("Estem compromesos en la realització dels tractaments més efectius i que provoquin les mínimes molèsties post-operatòries.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/implants-qualitat');

        return view('frontend.implantsQualitat.index');
    }

    public function ortodonciaOdontopediatria()
    {
        SEOTools::setTitle('Ortodòncia Girona, Estètica dental Girona, Clínica Barroso Girona');
        SEOTools::setDescription("Molts pacients que abans no es plantejaven un tractament d'ortodòncia per motius estètics, ara tenen més opcions alhora de decidir.");
        SEOTools::setCanonical('https://www.clinicabarroso.com/ortodoncia-i-odontopediatria-girona');

        return view('frontend.ortodonciaOdontopediatria.index');
    }

}
