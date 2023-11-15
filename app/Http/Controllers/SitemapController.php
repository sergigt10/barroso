<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producte;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        return response()->view('frontend.sitemap.index')->header('Content-Type', 'text/xml');
    }

    public function statics()
    {
        $startOfMonth = Carbon::now()->startOfMonth()->format('c');
        $statics = [
            '',
            'nosaltres',
            'clinica-dental-girona',
            'ortodoncia-girona',
            'periodoncia-girona',
            'implantologia-girona',
            'protesis-dental-girona',
            'endodoncia-girona',
            'odontopediatria-girona',
            'testimonials',
            'contacte',
            'historia',
            'dentista-girona',
            'disseny-somriures',
            'odontologia-avancada-girona',
            'invisalign-girona',
            'implants-qualitat',
            'ortodoncia-i-odontopediatria-girona'
        ];
        return response()->view('frontend.sitemap.statics', [
            'statics' => $statics,
            'startOfMonth' => $startOfMonth
        ])->header('Content-Type', 'text/xml');
    }
}
