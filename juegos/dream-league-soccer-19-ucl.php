<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dream League Soccer 19 UCL'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Prepárate para una nueva temporada de acción de la máxima calidad.</p><p>El fútbol ha cambiado para siempre y la oportunidad es toda tuya para formar el mejor equipo sobre la faz de la tierra.</p><p>Descarga&nbsp;<strong>Dream League Soccer 19 UCL</strong>&nbsp;apk + datos obb ultima versión&nbsp;en LOMUCHACHOgames y juega todo el día al fútbol.</p><p><strong>Dream League Soccer 19 UCL</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVO SISTEMA DE JUEGO LLENO DE REALISMO&nbsp;</li><li>GESTIONA TODO UN DREAM TEAM</li><li>COMPITE POR LA GLORIA</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';