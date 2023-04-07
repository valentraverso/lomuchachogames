<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hunter Assassin HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Controla al asesino y caza a tus objetivos uno por uno. Usa tus alrededores y sombras para mantenerte oculto de las linternas.&nbsp;</p><p>Los objetivos con ametralladoras automáticas pueden estar al acecho en cada esquina. Atacarlos rápidamente y escapar sin ser visto. Cada objetivo eliminado deja caer gemas valiosas. Usa gemas para desbloquear asesinos más rápidos.</p><p>Descarga&nbsp;<strong>Hunter Assassin HACK&nbsp;</strong>apk ultima version&nbsp;en LOMUCHACHOgames y controla al mejor asesino.</p><p><strong>Hunter Assassin HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';