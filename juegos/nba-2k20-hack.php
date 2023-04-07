<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'NBA 2K20 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Lleva contigo a cualquier parte la acción clásica de 2K con NBA 2K20 para móviles, con 5 nuevas Historias de la NBA, una nueva trama de Mi CARRERA y el nuevo modo Toma las calles. NBA 2K20 incluye una gran variedad de modos de juego para todos los jugadores, desde partidos 5 contra 5 con equipos actuales e históricos de la NBA hasta baloncesto callejero en Blacktop.</p><p>Por primera vez en cualquier juego de NBA 2K, participa con Mi JUGADOR en campeonatos callejeros 3 contra 3 por todo el mundo. Lúcete y domina los partidos con habilidades y atributos mejorados. Compite contra otros jugadores por un puesto en los marcadores e intenta llegar lo más lejos posible en el campeonato.</p><p>Descarga&nbsp;<strong>NBA 2K20 HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mejor en la cancha.</p><p><strong>NBA 2K20 HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';