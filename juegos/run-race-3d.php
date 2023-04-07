<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Run Race 3D'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Corre a través del mapa en Run Race 3D ultima version. Compite en una de las mejores experiencias de parkour contra otras personas.</p><p>Salta de pared a pared, escala cuerdas, deslízate para ir más rápido, gira para saltar más alto, agárrate para balancearte, usa barras trepadoras para no caer.</p><p>Descargar&nbsp;<strong>Run Race 3D&nbsp;</strong>APK para Android en LOMUCHACHogames y trepa esos muros como el mejor.</p><p>Lo que trae Run Race 3D 1.1.1:</p><ul><li>Hay docenas de mapas y todos requieren diferentes habilidades.</li><li>Aumenta tu ranking superando a tus oponentes.</li></ul>";
include_once '../templates/game/v1.php';