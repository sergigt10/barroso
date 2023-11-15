<?php

use Illuminate\Support\Facades\Route;

// FrontEnd //

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localize', 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
        /* Inici */
        Route::get('/', 'FrontendController@index')->name('frontend.inici.index');
        /* Nosaltres */
        Route::get('/nosaltres', 'FrontendController@nosaltres')->name('frontend.nosaltres.index');
        /* Clínica */
        Route::get('/clinica-dental-girona', 'FrontendController@clinica')->name('frontend.clinica.index');
        /* Tractaments Ortodoncia */
        Route::get('/ortodoncia-girona', 'FrontendController@ortodoncia')->name('frontend.ortodoncia.index');
        /* Tractaments Periodoncia */
        Route::get('/periodoncia-girona', 'FrontendController@periodoncia')->name('frontend.periodoncia.index');
        /* Tractaments Implantologia */
        Route::get('/implantologia-girona', 'FrontendController@implantologia')->name('frontend.implantologia.index');
        /* Tractaments Protesis */
        Route::get('/protesis-dental-girona', 'FrontendController@protesis')->name('frontend.protesis.index');
        /* Tractaments Endodoncia */
        Route::get('/endodoncia-girona', 'FrontendController@endodoncia')->name('frontend.endodoncia.index');
        /* Tractaments Odontopediatria */
        Route::get('/odontopediatria-girona', 'FrontendController@odontopediatria')->name('frontend.odontopediatria.index');
        /* Testimonials */
        Route::get('/testimonials', 'FrontendController@testimonials')->name('frontend.testimonials.index');
        /* Contacte */
        Route::get('/contacte', 'FrontendController@contacte')->name('frontend.contacte.index');
        /* Historia */
        Route::get('/historia', 'FrontendController@historia')->name('frontend.historia.index');
        /* Dentista Girona */
        Route::get('/dentista-girona', 'FrontendController@dentista')->name('frontend.dentistaGirona.index');
        /* Disseny somriures */
        Route::get('/disseny-somriures', 'FrontendController@disseny')->name('frontend.dissenySomriures.index');
        /* Odontologia avançada */
        Route::get('/odontologia-avancada-girona', 'FrontendController@odontologia')->name('frontend.odontologia.index');
        /* La veu de l'expert */
        Route::get('/invisalign-girona', 'FrontendController@invisalign')->name('frontend.invisalign.index');
        /* Implants de qualitat */
        Route::get('/implants-qualitat', 'FrontendController@implantsQualitat')->name('frontend.implantsQualitat.index');
        /* Ortodoncia i odontopediatria */
        Route::get('/ortodoncia-i-odontopediatria-girona', 'FrontendController@ortodonciaOdontopediatria')->name('frontend.ortodonciaOdontopediatria.index');
});
        /* Sitemap */
        Route::get('/sitemap.xml', 'SitemapController@index');
        Route::get('/sitemap.xml/statics', 'SitemapController@statics');
