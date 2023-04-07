<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Space Hobo'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Este es un juego de estrategia de arcade, donde juegas como un vagabundo espacial, cuya caja de cartón ha sido robada.</p>

<p>Todo el juego tiene que ver con el equilibrio (como piedra-papel-tijera) y desbloquear mascotas o habilidades especiales.</p>

<p>Descargar<strong> Space Hobo </strong>apk gratis para Android en LOMUCHACHOgames y disfruta de este juegazo.</p>";
include_once '../templates/game/v1.php';