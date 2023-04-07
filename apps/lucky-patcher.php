<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Lucky Patcher'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Con Lucky Patcher puedes controlar las aplicaciones instaladas en tu dispositivo. Para tomar este control sobre las aplicaciones, necesita un Android rooteado para obtener todas las características de la aplicación.&nbsp;</p><p>Aunque la aplicación puede hacer muchas tareas sin acceso a la raíz. Lucky Patcher se puede descargar de forma gratuita, pero le recomendamos que lo descargue solo de sitios verificados, ya que muchos sitios compartieron uno falso.</p><p>Descarga&nbsp;<strong>Lucky Patcher</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y hackea tu dispositivo movil.</p><p><strong>Lucky Patcher</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Lucky Patcher busca todas las aplicaciones al inicio y muestra las aplicaciones que se pueden reparar.</li><li>Lucky Patcher puede eliminar la verificación de compra de la aplicación para muchas aplicaciones y juegos de Android.</li><li>Lucky Patcher puede modificar muchos juegos populares para Android.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';