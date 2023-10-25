<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($productos as $producto)
        <url>
            <loc>https://www.clinicabarroso.com/seguretat-i-foc/es/producte/{{ $producto->slug }}</loc>
            <xhtml:link
                rel="alternate"
                hreflang="ca"
                href="https://www.clinicabarroso.com/seguretat-i-foc/ca/producte/{{ $producto->slug }}"
            />
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>