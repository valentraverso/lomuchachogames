<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Super Helix MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>En nuestra versión del juego popular hay una serie de ventajas, juego simple pero emocionante, buena optimización, el juego funciona de manera estable incluso en dispositivos débiles, un mínimo de publicidad, se muestran videos, solo con visualización voluntaria para tener la oportunidad de recuperarse del mismo lugar después de la pérdida, el juego está completamente localizado, tienda del juego que te permite comprar vida, nuevas bolas y temas.&nbsp;</p><p>Soporte para los servicios de Google Play, generación automática de niveles, siempre una posición diferente de las plataformas, un gran número de niveles, ganar puntos, establecer registros, competir con amigos sin límites.</p><p>Descarga&nbsp;<strong>Super Helix MOD</strong>&nbsp;apk en su ultima version para Android&nbsp;en LOMUCHACHOgames y llega lo mas lejos que puedas.</p>";
$info = "<p><strong>Super Helix MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';