<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Preguntados (Sin publicidad)'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Disfruta desafiando a tus amigos y enemigos en el juego de trivia del momento.</p>

<p>De la mano de Willy, nuestra simpática ruleta, contestarás preguntas en seis categorías diferentes. Obtén las seis coronas para ganar y ten cuidado con la revancha.</p>

<p>Descargar<strong> Preguntados (Sin publicidad) </strong>apk gratis para Android en LOMUCHACHOgames y gana todas las partidas.</p>";
include_once '../templates/game/v1.php';