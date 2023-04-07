<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Lucky Patcher HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Con Lucky Patcher puedes controlar las aplicaciones instaladas en tu dispositivo. Para tomar este control sobre las aplicaciones, necesita un Android rooteado para obtener todas las características de la aplicación.&nbsp;</p><p>Aunque la aplicación puede hacer muchas tareas sin acceso a la raíz. Lucky Patcher se puede descargar de forma gratuita, pero le recomendamos que lo descargue solo de sitios verificados, ya que muchos sitios compartieron uno falso.</p><p>Descarga&nbsp;<strong>Lucky Patcher HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y hackea tu dispositivo movil.</p><p><strong>Lucky Patcher HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';