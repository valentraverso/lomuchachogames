<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Simulación de Fluidos'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Juega con fluidos con el toque de tus dedos. Experimenta con las sustancias arremolinadas.</p>

<p>Magníficas imágenes con efectos de floración, rayos solares y reflejos especulares. Interfaz de usuario elegante con muchas opciones para jugar.</p>

<p>Descargar<strong> Simulación de Fluidos </strong>apk gratis para Android en LOMUCHACHOgames y simula diferentes parametros.</p><p>Simulación de Fluidos para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>Funciona por una fuerza mágica</li>
 	<li>Desaparecerá tu mal humor</li>
 	<li>Te convertirás en una persona agradable con muchos amigos</li>
</ul>";
include_once '../templates/game/v1.php';