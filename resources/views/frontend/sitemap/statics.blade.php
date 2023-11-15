<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xhtml="http://www.w3.org/1999/xhtml">
    @foreach ($statics as $static)
        <url>
            <loc>https://www.clinicabarroso.com/ca/{{ $static }}</loc>
            <xhtml:link
                rel="alternate"
                hreflang="es"
                href="https://www.clinicabarroso.com/es/{{ $static }}"
            />
            <lastmod>{{ $startOfMonth }}</lastmod>
            <changefreq>yearly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach
</urlset>