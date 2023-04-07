<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Rebel Inc. HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>La guerra termino, pero todos sabemos que eso no significa nada. Para estabilizar el país, debes equilibrar las prioridades militares y civiles para ganar los corazones y las mentes de las personas, mientras que evitas a los insurgentes tomar el poder.</p>

<p>Rebel Inc. es el nuevo juego del creador de Plague Inc. , uno de los juegos pagos más conocidos de la historia con más de 100 millones de jugadores. Brillantemente ejecutado, con hermosos gráficos y una jugabilidad aclamada por la crítica, Rebel Inc. ofrece un desafío estratégico profundamente atractivo, inspirado en las complejidades y consecuencias de la contrainsurgencia moderna.</p>

<p>Descarga <strong>Rebel Inc. HACK </strong>apk gratis en LOMUCHACHOgames y maneja la civilizacion.</p><p>Lo que trae Rebel Inc. HACK apk para android:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
include_once '../templates/game/v1.php';