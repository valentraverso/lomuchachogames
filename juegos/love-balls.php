<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Love Balls'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En Love Balls para Android haz que las dos bolitas, azul y rosa, se unan. Crea diferentes formas geométricas o garabatos para lograr superar los diferentes niveles que nos propone este juego de puzle.</p><p>Haz que las bolas choquen para ganar monedas, con las cuales luego compraremos ropa a nuestras pelotas y diferentes escenarios donde jugar.</p><p>Descargar&nbsp;<strong>Love Balls&nbsp;</strong>apk para Android en LOMUCHACHOgames y descubrí esta hermosa historia de amor.</p><p>Lo que trae Love Balls 1.4.2:</p><ul><li>Libre para jugar, jugar en cualquier lugar en cualquier momento</li><li>Apto para todas las edades</li><li>Reglas sencillas, pero un poco difícil de borrar el nivel, se encuentra la adicción.</li><li>También se puede disfrutar de la diversión de las plumas de recolección</li><li>Ahora trata de conseguir una mayor puntuación y compartirlo con tus amigos!</li></ul>";
include_once '../templates/game/v1.php';