<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Preguntados 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Bienvenido a la segunda entrega del mejor juego de trivias para Android y PC, entra con tu cuenta de Facebook o create una y juga contra personas de todo el mundo o con tus amigos. Descubrí todos los modos de juego como carrera, arcade y otros.</p><p>Pone a prueba tu inteligencia y eleji la opción correcta en el menor tiempo posible para ganar y llevarte un premio monetario.</p><p>Descarga&nbsp;<strong>Preguntados 2</strong> apk 1.14.2 en LOMUCHACHOgames y&nbsp; saca tus conocimientos mas profundos.</p><p>Lo que trae Preguntados 2 mod:</p><ul><li>¡Disfruta de un entorno 100% renovado!</li><li>Gana coronas para subir de nivel</li><li>Colecciona personajes divertidos</li><li>Únete a un Equipo o crea uno nuevo</li><li>Intercambia ítems con tus amigos</li></ul>";
include_once '../templates/game/v1.php';