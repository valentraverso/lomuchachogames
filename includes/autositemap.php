<?php
include_once 'conection.php';

$mirta = "SELECT * FROM juegos ORDER BY juegos.id DESC";
$data = $conn->query($mirta);

$testo = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$d = fopen("../sitemap-juegos.xml", "w+");
fwrite($d, $testo);
while($fila = mysqli_fetch_array($data)){
    $lol = str_replace("&", "&amp;", $fila['link']);
fwrite($d, "<url>
<loc>$lol</loc>
<changefreq>monthly</changefreq>
<priority>0.85</priority>
</url>");
};
fwrite($d,"</urlset>");
fclose($d);

$marta = "SELECT * FROM apps";
$dat = $conn->query($marta);

$test = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
$e = fopen("../sitemap-app.xml", "w+");
fwrite($e, $test);
while($fila = mysqli_fetch_array($dat)){
    $lol = str_replace("&", "&amp;", $fila['link']);
fwrite($e, "<url>
<loc>$lol</loc>
<changefreq>monthly</changefreq>
<priority>0.85</priority>
</url>");
};
fwrite($e,"</urlset>");
fclose($e);

echo '<a href="https://lomuchachogames.com/admin"><- Volver</a>';