<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Space RPG 3 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>RPG espacio de 3 características excelente juego de rol de acción y aventura. Quieres ser rico en las rutas comerciales bienes piratas de otros barcos Seguir la historia principal.</p>

<p>Apagarse, hacer misiones secundarias, y explorar La decisión es tuya Inspirado por la serie clásica velocidad de escape, Espacio RPG 3 te mantendrá entretenido durante horas.</p>

<p>Descargar<strong> Space RPG 3 HACK </strong>apk gratis para Android en LOMUCHACHOgames y hazte rico.</p>";
include_once '../templates/game/v1.php';