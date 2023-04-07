<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Cure Hunters HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>En el año 2078 un misterioso meteorito chocó contra la superficie terrestre. El impacto hizo que el meteorito liberase un video que infectó a casi toda los habitantes de la Tierra. Rápidamente, el general \"Vaccinez\" reclutó una brigada de Cure Hunters que preparó para encontrar un antídoto.</p>
<p>Uno de los reclutados, el Dr. Dellton, fue enviado para desinfectar una zona afectada. Y así comienza la aventura.</p>
<p>Descargar <strong>Cure Hunters HACK </strong>apk gratis para Android en LOMUCHACHOgames y trata de recobrar la vida de este lugar.</p><p>Cure Hunters HACK para Android es una gran opcion a la hora de elegir ente juegos de accion. Algunas características de este son:</p>
<ul>
 	<li>MOD del juego</li>
</ul>";
include_once '../templates/game/v1.php';