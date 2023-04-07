<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Taxi Driver 2019'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Llega la entrega 2019 del mejor juego para Android de taxis. Encarna la vida de un taxista, sube gente a tu auto y llevala hasta el lugar que te indica la flecha amarilla o el punto azul en el mapa.</p><p>Comprate autos diferentes para que tus pasajeros viajen mas comodos y asi tambien, poder llegar mas rapido a todos lados.</p><p>Descarga&nbsp;<strong>Taxi Driver 2019</strong> apk gratis en LOMUCHACHOgames y montate a tu taxi.</p><p>Lo que trae Taxi Driver 2019 apk:</p><ul><li>Graficos realistas</li><li>Mas autos</li></ul>";
include_once '../templates/game/v1.php';