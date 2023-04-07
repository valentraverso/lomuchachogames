<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'METAL SLUG 3'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>La legendaria acción de tiro maestra NEOGEO 2D “Metal Slug 3” se dirige a los dispositivos Android! El uso de diversas armas y babosas que luchar su camino a través y sobrevivir en el campo de batalla.</p><p>Además de su clásico “MODO ARCADE”, esta conversión perfecta de “Metal Slug 3” incluye un “modo de misión”, que le permite seleccionar en qué etapa que desea jugar.</p><p>Descarga&nbsp;<strong>METAL SLUG 3</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y completa las misiones.</p><p><strong>METAL SLUG 3</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>No sólo un puerto perfecto del juego NEOGEO original</li><li>Comando muchos vehículos Slug como un as</li><li>Borrar todas las rutas a través del sistema de mapas de ramificación</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';