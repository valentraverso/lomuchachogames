<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Alpaca World HD HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>En Alpaca World HD sos dueño de una granja de alpacas, donde deberas mejorarlas, verstirlas, y tratar de capturar más diferentes alpacas que te permitirán experimentar ternura ilimitada.</p>

<p>Este juego para Android es muy divertido y en el encontraras millones de colores de alpacas para capturar. Con este hack de Alpaca World vas a tener compras en la tienda ilimitadas.</p>

<p>Descargar <strong>Alpaca World HD HACK</strong> gratis APK ultima verision en LOMUCHACHOgames.</p><p>Descarga Alpaca World HD mod apk gratis ultima versión para Android con las siguientes características:</p>
<ul>
 	<li>Alpacas muy lindo, con una variación extrema de colores.</li>
 	<li>Explora colinas para encontrar y capturar alpacas salvajes.</li>
 	<li>Viste tus alpacas con muchos accesorios en el juego.</li>
</ul>";
include_once '../templates/game/v1.php';