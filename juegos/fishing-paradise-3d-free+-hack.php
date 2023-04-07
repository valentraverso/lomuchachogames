<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Fishing Paradise 3D Free+ HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Acción de pesca realista en sus manos! 49+ millones de instalaciones en todo el mundo! gráficos en 3D impresionantes, de acción multijugador.</p>

<p>Construir y administrar su propia granja de peces y viajar a lugares remotos y exóticos.</p>

<p>Descargar <strong>Fishing Paradise 3D Free+ HACK </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en la pesca.</p><p>Fishing Paradise 3D Free+ HACK para Android es una gran opcion a la hora de elegir ente juegos de accion. Algunas características de este son:</p>
<ul>
 	<li>Dinero Ilimitado</li>
</ul>";
include_once '../templates/game/v1.php';