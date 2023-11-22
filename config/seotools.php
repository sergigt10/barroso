<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false, // set false to total remove
            'titleBefore'  => false, // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => "Benvinguts a Clínica Dental Barroso des de l'any 1949 hem estat vetllant per la seva salut dental i avuí dia seguim amb la mateixa il·lusió amb la qual vam començar.", // set false to total remove
            'separator'    => ', ',
            'keywords'     => ['Clínica Barroso', 'Implants Girona', 'clínica dental Girona', 'protesis-dental-girona', 'endodoncia girona', 'ortodoncia girona', 'Odontopediatria girona', 'periodòncia girona', 'implants girona', 'protesis girona', 'dentista girona', 'clinica dental girona'],
            'canonical'    => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Clínica Barroso, Implants Girona, clínica dental Girona', // set false to total remove
            'description' => "Benvinguts a Clínica Dental Barroso des de l'any 1949 hem estat vetllant per la seva salut dental i avuí dia seguim amb la mateixa il·lusió amb la qual vam començar.", // set false to total remove
            'url'         => null, // Set null for using Url::current(), set false to total remove
            'type'        => 'website',
            'site_name'   => 'Clínica Dental Barroso',
            'locale'      => 'ca_CA',
            'images'      => ['https://www.clinicabarroso.com/frontend/img/clinica-dental-girona.jpg'],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            'card'        => 'summary',
            'title'       => 'Clínica Barroso, Implants Girona, clínica dental Girona',
            'site'        => '',
            'creator'     => '',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Clínica Barroso, Implants Girona, clínica dental Girona', // set false to total remove
            'description' => "Benvinguts a Clínica Dental Barroso des de l'any 1949 hem estat vetllant per la seva salut dental i avuí dia seguim amb la mateixa il·lusió amb la qual vam començar.", // set false to total remove
            'url'         => 'https://www.clinicabarroso.com', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => ['https://www.clinicabarroso.com/frontend/img/clinica-dental-girona.jpg'],
        ],
    ],
];
