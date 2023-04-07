<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Minecraft HACK MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Explora mundos infinitos y construye toda clase de cosas, desde la casa más simple hasta el castillo más grandioso. Juega en modo creativo con recursos ilimitados o extrae los materiales de las profundidades del mundo en el modo supervivencia, fabricando armas y armaduras para defenderte de las criaturas peligrosas.&nbsp;</p><p>Crea, explora y sobrevive solo o con amigos desde dispositivos móviles.</p><p>Descarga&nbsp;<strong>Minecraft HACK MOD</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta creando mundos.</p><p><strong>Minecraft HACK MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Inmortal</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';