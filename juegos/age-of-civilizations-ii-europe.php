<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Age of Civilizations II Europe'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Age of Civilizations II Europe es un juego de guerra de gran estrategia que es simple de aprender pero difícil de dominar. Tu objetivo es usar tácticas militares y diplomacia astuta para unificar el mundo o conquistarlo.</p><p>Age of Civilizations II atraviesa toda la historia de la humanidad, edad por edad, comenzando en la era de las Civilizaciones y conduciendo al futuro lejano.</p><p>Descarga&nbsp;<strong>Age of Civilizations II Europe</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y conquista Europa en esta nuev version.</p>";
$info = "<p><strong>Age of Civilizations II Europe</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>El enfoque es hacia la historia</li><li>Gran campaña histórica</li><li>Tratados de paz</li></ul>";
$versiondispositivo = "2.3 o +";
$mod = "";
include_once '../templates/game/v1.php';