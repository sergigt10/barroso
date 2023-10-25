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
        /* Invisalign */
        Route::get('/invisalign-girona', 'FrontendController@invisalign')->name('frontend.invisalign.index');
        /* Implants de qualitat */
        Route::get('/implants-qualitat', 'FrontendController@implantsQualitat')->name('frontend.implantsQualitat.index');
});
        /* Sitemap */
        Route::get('/sitemap.xml', 'SitemapController@index');
        Route::get('/sitemap.xml/statics', 'SitemapController@statics');
