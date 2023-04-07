<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rush Rally 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Afronta el nuevo modo Carrera, compite en un rally en diversos países o acelera a fondo y compite contra otros vehículos en Rally Cross.</p>

<p>Rush Rally 3 es el simulador de rallyes más realista que podrás encontrar en móviles.</p>

<p>Descargar<strong> Rush Rally 3 </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en las pistas de tierra.</p><p>Rush Rally 3 para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
 	<li>ORGANIZA TU GARAJE</li>
 	<li>CONTROLES OPTIMIZADOS</li>
 	<li>RALLY MUNDIAL</li>
</ul>";
include_once '../templates/game/v1.php';