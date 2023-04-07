<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Spitkiss'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Spitkiss es un divertido juego de plataformas donde te sera muy facil controlar todo, ya que con solo un dedo tendras que hacer todo los movimientos necesarios para ganar. Este juego esta completo para Android y en su ultima version.</p>

<p>Juega con divertidas criaturas que se comunican a traves de fluidos corporales y emojis. En Spitkiss full apk tendras que abrirte paso a traves de órganos saltando, goteando, rebotando y ralentizando el tiempo con tu saliva, la verdad es un juego raro pero entretenido.</p>

<p>Descargar <strong>Spitkiss </strong>1.400 apk gratis para android en LOMUCHACHOgames y juga en los organos.</p><p>Vamos a jugar Spitkiss para Android version 1.400 donde el entorno temas de poliamor y género fluido no binarias en dos capas. Spitkiss apk es un juego arcade que vas a amar.</p>";
include_once '../templates/game/v1.php';