<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Asphal 8 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>En Asphalt 8 participarás en carreras con los vehículos mejor diseñados del mundo, tanto automóviles como motocicletas, y harás un viaje de auténtica velocidad por todo el mundo.&nbsp;</p><p>Desde el ardiente desierto de Nevada hasta los callejones de Tokio, te vas a encontrar con un mundo plagado de desafíos, emoción y diversión arcade en tu camino a la cima.</p><p>Descarga&nbsp;<strong>Asphal 8 MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y se el mas veloz en la pista.</p>";
$info = "<p><strong>Asphal 8 MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';