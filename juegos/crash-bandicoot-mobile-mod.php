<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Crash Bandicoot Mobile MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Un nuevo tipo de aventura Crash con tus personajes favoritos. Crash y Coco se unen para poner fin al malvado plan del Dr. Neo Cortex de destruir el multiverso.&nbsp;</p><p>En este nuevo episodio móvil, el Dr. Neo Cortex ha enviado secuaces mutagénicos a través del multiverso para esclavizar todas las dimensiones. Con la ayuda de su hermana Coco,. Crash debe devolver a los secuaces de Cortex a sus propias dimensiones.</p><p>Descarga&nbsp;<strong>Crash Bandicoot Mobile MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y revive viejos tiempos.</p>";
$info = "<p><strong>Crash Bandicoot Mobile MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>SUS CARACTERES FAVORITOS ESTÁN DE VUELTA</li><li>DESCUBRE CAMINOS OCULTOS</li><li>EXPANDA LA BASE DEL COCO Y AHORRE EL MULTIVERSE</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';