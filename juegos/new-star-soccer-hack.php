<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'New Star Soccer HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>New Star Soccer es uno de los juegos más adictivos que existen, es el juego de fútbol aclamado y adorado por jugadores y prensa de videojuegos en masa. Ocúpate de tus relaciones, manteniendo felices a tus compañeros de equipo, al entrenador, a tu pareja y a tus patrocinadores mientras te enfrentas a dilemas y vuelcos apasionantes. Tan divertido si juegas un par de minutos como si le dedicas varias horas intensas, New Star Soccer te entretendrá, te hará disfrutar y te dará ganas de jugar más. Y es totalmente gratis sin ninguna restricción.</p><p>Forma tus habilidades y tu estilo y sube a la montaña rusa de la vida, experimentando todas las emociones que ofrece este gran deporte.</p><p>Descarga <strong>New Star Soccer HACK</strong> Gratis para Android en LOMUCHACHOgames y se el mejor jugador de todos los tiempos.</p><p>Mas caracteristicas de <strong>New Star Soccer HACK</strong>:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';