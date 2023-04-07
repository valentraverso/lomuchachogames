<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = '911 Operator MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En 911 OPERATOR ocuparás el papel de un operador de emergencias que tendrá que reaccionar de forma inmediata a los avisos que van apareciendo. Tu tarea no sólo consistirá en contestar al teléfono, sino que también tendrás que reaccionar de forma adecuada a cada situación.</p><p>Podrás elegir entre decenas de miles de ciudades de todo el mundo. En el modo de juego libre podrás elegir cualquier ciudad y el juego descargará su mapa con la distribución real de sus calles, direcciones e infraestructuras de servicios de emergencia.</p><p>Descarga&nbsp;<strong>911 Operator MOD</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y se un salvador.</p><p><strong>911 Operator MOD</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';