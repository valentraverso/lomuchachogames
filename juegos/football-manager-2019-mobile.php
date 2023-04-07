<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Football Manager 2019 Mobile'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Football Manager 2019 Mobile te va a dar una experiencia de gestion realista de un equipo de futbol, junto con las grandes demandas que conlleva ser un DT. Al empezar en Football Manager entraras en un club aleatorio pero que no te de miedo tus jugadores, todo se puede mejorar con un poco de dinero y ganas.</p>
<p>Construye tu equipo de ganadores en Football Manger 2019 Mobile y llevalo a la victoria. Imagina tacticas que deslumbren en la cancha y que dejen a los jugadores del otro equipo como tontos.</p>
<p>Descargar <strong>Football Manager 2019 Mobile </strong>gratis apk + datos obb para Android y convertite en el director tecnico mas valuado en la historia del futbol.</p>
 <p>Mas cosas sobre Football:</p>
<ul>
 	<li> Podes descargar Football Manager 2019 Mobile de LOMUCHACHOgames por Mega y Mediafire</li>
 	<li>Convertite en un Director Tecnico</li>
 	<li>Mejora en cada partido</li>
 	<li>Juga ligas</li>
 	<li>Ojeo tactico mejorado</li>
 	<li>Mejoras en el editor de juego</li>
</ul>";
include_once '../templates/game/v1.php';