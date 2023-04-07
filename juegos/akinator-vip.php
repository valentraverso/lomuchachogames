<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Akinator VIP'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Akinator puede leer tu mente y decirte en qué personaje estás pensando, solo haciéndote algunas preguntas. Piensa en un personaje real o ficticio y Akinator intentará adivinar quién es.&nbsp;</p><p>Amplia tu experiencia Akinator con la cuenta de usuario. Akinator te permite crear tu propia cuenta de usuario. Con esto se registrarán los Aki Awards que hayas ganado, los accesorios que hayas desbloqueado y el balance de Genizs. Te seguirán a todas partes ahora, incluso si cambias tu dispositivo móvil.</p><p>Descarga&nbsp;<strong>Akinator VIP</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y desafia al genio.</p>";
$info = "<p><strong>Akinator VIP</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVO</li><li>1 TEMA ADICIONAL ADEMÁS DE LOS PERSONAJES</li><li>IR A LA BÚSQUEDA DE LOS PREMIOS AKI</li><li>DESATA TU CREATIVIDAD</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';