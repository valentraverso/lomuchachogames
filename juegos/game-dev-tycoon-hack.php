<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Game Dev Tycoon HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>En Game Dev Tycoon para Android es donde vas a tener que crear tu empresa de juegos, vas a empezar en tu pequeño garage con una computadora vieja, pero si creas buenos juegos vas a crecer de manera rápido y vas a poder expandirte.</p><p>Este juego de simulacion en 2d es muy adictivo, por lo cual te garantiza horas de juegos. Lo mejor es la gran libertad que te da para elegir diversas opciones y así llevar a tu empresa y personaje a distintas situaciones, que pueden ser buenas o malas.</p><p>Descargar&nbsp;<strong>Game Dev Tycoon HACK</strong> '.1.5.3.'&nbsp;gratis para Android en LOMUCHACHOgames y convertite en el mejor creador de juegos.</p><p><strong>Game Dev Tycoon</strong> apk es muy divertido,&nbsp;crea juegos líderes en ventas, investiga tecnologías nuevas para impulsar tu negocio e inventa nuevos tipos de videojuego. Conviértete en un líder del mercado y consigue seguidores por todo el mundo.</p><ul><li>Free Shoping</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';