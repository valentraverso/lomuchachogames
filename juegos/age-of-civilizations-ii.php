<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Age of Civilizations II'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Age of Civilizations II es un juego de guerra de gran estrategia que es simple de aprender pero difícil de dominar. Tu objetivo es usar tácticas militares y diplomacia astuta para unificar el mundo o conquistarlo.</p><p>Age of Civilizations II atraviesa toda la historia de la humanidad, edad por edad, comenzando en la era de las Civilizaciones y conduciendo al futuro lejano.</p><p>Descarga&nbsp;<strong>Age of Civilizations II</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y juega con muchas civilizaciones.</p><p><strong>Age of Civilizations II</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Gran campaña histórica</li><li>Tratados de paz</li><li>Revoluciones</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';