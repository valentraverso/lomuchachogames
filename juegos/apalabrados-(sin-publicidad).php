<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Apalabrados (sin publicidad)'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Elegido juego del año 2012 en la App Store, Apalabrados es un adictivo juego de palabras que ya supera las 20 millones de descargas.</p>

<p>Juega cuando quieras y contra todos los oponentes que quieras: es asincrónico, multiplataforma y multipartida.</p>

<p>Descargar<strong> Apalabrados (sin publicidad) </strong>apk gratis para Android en LOMUCHACHOgames y gana todas las partidas.</p><p>Apalabrados (sin publicidad) para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Sin Publicidad</li>
</ul>";
include_once '../templates/game/v1.php';