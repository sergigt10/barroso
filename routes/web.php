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
});
        /* Sitemap */
        Route::get('/sitemap.xml', 'SitemapController@index');
        Route::get('/sitemap.xml/statics', 'SitemapController@statics');
