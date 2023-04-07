<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA NOW: El juego de baloncesto para móvil'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Si te gustó NBA, NBA NOW te encantará.</p>

<p>Forma un equipo de campeonato y conviértete en el mejor jugador, GM o entrenador de todos los tiempos.</p>

<p>Descargar<strong> NBA NOW: El juego de baloncesto para móvil </strong>apk gratis para Android en LOMUCHACHOgames y se el mejor en las pistas.</p>";
include_once '../templates/game/v1.php';