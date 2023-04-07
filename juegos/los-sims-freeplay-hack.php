<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Los Sims FreePlay HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Celebra las fiestas con un caserío maravilloso, una mascota adorable y mucho más. Juega con el simulador de vida más popular del mundo.&nbsp;</p><p>Esta aplicación permite realizar compras integradas. Puedes desactivar las compras dentro de la aplicación en los ajustes del dispositivo. Crea Sims únicos, construye casas de ensueño y dales la vida que tú quieras.</p><p>Descarga&nbsp;<strong>Los Sims FreePlay HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de la vida virtual.</p><p><strong>Los Sims FreePlay HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';