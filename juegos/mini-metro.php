<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mini Metro'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Mini Metro es un juego en el que diseñarás la red de metro de una ciudad en crecimiento. Traza líneas entre las diferentes estaciones y pon tus trenes en marcha. Consigue que tus rutas sean eficientes y modifícalas a medida que se abran nuevas estaciones. Decide cómo usar tus limitados recursos.</p><p>Descarga <strong>Mini Metro&nbsp;</strong>apk en LOMUCHACHOgames y crea nuevos caminos.</p><p>Lo que trae Mini Metro:</p><ul><li>El crecimiento de la ciudad será aleatorio, ¡así que cada partida será única!</li><li>Veinte ciudades reales en la que poner a prueba tu habilidad como gestor.</li><li>Numerosas mejoras para dar forma a tu red de metro.</li><li>Modo Normal para partidas rápidas de sumar puntos, Infinito para relajarse y Hora punta para disfrutar del máximo desafío.</li></ul>";
include_once '../templates/game/v1.php';