<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'SD Maid Pro'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>SD Maid es una aplicación y una herramienta de gestión de archivos que le ayuda a mantener el dispositivo limpio y ordenado.&nbsp;</p><p>Esta aplicación desbloquea el estado Pro en la versión gratuita de SD, que permite todas las características adicionales.<br>Esta no es una aplicación independiente. Necesita instalar la versión gratuita de SD Maid.</p><p>Descarga&nbsp;<strong>SD Maid Pro</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y controla tu movil.</p><p><strong>SD Maid Pro</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Pequeños cambios relacionados con la última actualización de SD Maid</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';