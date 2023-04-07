<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Standoff 2 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>El legendario juego Standoff está de vuelta como un dinámico juego de disparos en primera persona.</p>

<p>Hay nuevos mapas, nuevos tipos de armas y nuevos modos de juego te esperan en este increíble juego de acción, donde terroristas y fuerzas especiales no participan en la batalla en búsqueda de vida, sino de muerte.</p>

<p>Descargar <strong>Standoff 2 HACK </strong>apk + obb gratis para Android en LOMUCHACHOgames y balea todo lo que se mueva.</p><p>Standoff 2 HACK para Android es una gran opcion a la hora de elegir ente juegos de aventura. Algunas características de este son:</p>
<ul>
 	<li>MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';