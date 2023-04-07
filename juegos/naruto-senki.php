<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Naruto Senki'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Entra al mundo de Naruto Senki, y revive viejos tiempo jugando con tu Ninja favorito.</p><p>El juego puede ser cualquier juego Naruto, Sasuke, me encanta el romance y otros ninja, experimenta la gran lucha de Naolao incluso jugando y una gran jugada esotérica de pantalla completa. Además, los jugadores también pueden liberar ninjas calientes, invocar a pasar a través de la bestia, experimentar el PK ninja, ¡juntos en la lucha para volver a encender el fuego!</p><p>Descargar&nbsp;<strong>Naruto Senki 1.22&nbsp;</strong>apk en LOMUCHACHOgames y juga con tu ninja favorito.</p><p>Lo que trae Naruto Senki para Android apk:</p><ul><li>Juga con Naruto</li></ul>";
include_once '../templates/game/v1.php';