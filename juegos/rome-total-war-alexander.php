<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'ROME Total War Alexander'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Dirige la campaña militar más audaz de la historia como Alejandro Magno y emprende una conquista del todopoderoso Imperio persa.&nbsp;</p><p>Alexander es el juego perfecto para comandantes experimentados. Para una introducción más ligera a las guerras clásicas, empieza con ROME: Total War. Si ya dominas ROME y Barbarian Invasion, Alexander te espera como la prueba definitiva de tus habilidades.</p><p>Descarga&nbsp;<strong>ROME Total War Alexander</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y se un verdadero comandante.</p>";
$info = "<p><strong>ROME Total War Alexander</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>EL MAYOR DESAFÍO ESTRATÉGICO</li><li>PROEZAS MILITARES TEMERARIAS</li><li>EJÉRCITOS DE ALEXANDER</li><li>DISEÑADO PARA ANDROID</li></ul>";
$versiondispositivo = "8.0 o+";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';