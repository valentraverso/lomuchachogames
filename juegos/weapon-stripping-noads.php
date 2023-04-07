<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Weapon stripping NoAds'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Este juego es una simulación de armas que te permite ensamblar y desmontar (también conocido como desarme de campo) varias armas de fuego de diferentes épocas: el juego incluye rifles de asalto, rifles de francotirador, ametralladoras, metralletas, pistolas, revólveres y escopetas.</p><p>El montaje y el desmontaje no son las únicas cosas que puede hacer. Las armas de fuego son totalmente operables, puede disparar las armas, aprender cómo dispara cada uno en diferentes modos: automático, ráfaga (si el arma tiene la función) y fuego único.</p><p>Descarga&nbsp;<strong>Weapon stripping NoAds</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de los disparos.</p><p><strong>Weapon stripping NoAds</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>AK</li><li>AK-74M</li><li>M4A1 Carabina</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';