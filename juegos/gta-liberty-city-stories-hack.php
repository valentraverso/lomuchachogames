<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'GTA: Liberty City Stories HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Prepárate para regresar a la Costa Este ya que Grand Theft Auto: Liberty City Stories llega a dispositivos móviles. Con misiones más cortas y pulidas, diseñadas tomando en cuenta el juego en dispositivos móviles.</p>

<p>Esta aventura definitiva de mundo abierto se remasterizó con numerosas mejoras gráficas, controles táctiles reequilibrados y guardado entre plataformas.</p>

<p>Descarga <strong>GTA: Liberty City Stories HACK </strong>para Android APK + OBB Full en Español en LOMUCHACHOgames y volve a la Costa Este.</p><p>Lo que trae GTA: Liberty City Stories HACK para Android:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
include_once '../templates/game/v1.php';