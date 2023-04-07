<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Elder Scrolls: Blades'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Los grandes creadores del juego Skyrim presentan The Elder Scrolls: Blades , un juego que sin duda te tendrá pegado frente a tu pantalla por muchas horas. Este juego RPG para Android es una versión moderna de la clásica experiencia de juego de exploración de mazmorras.</p>
<p>Explora los miles de valles y lugares que este juego tiene, consigue armas mejoralas y también a tu personaje, pero lo mejor, envolvete en una de las historias mas atrapantes de todas.</p>
<p>Descargar <strong>The Elder Scrolls: Blades</strong> gratis ultima version en LOMUCHACHOgames y domina el insondable Abismo.";
include_once '../templates/game/v1.php';