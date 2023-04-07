<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = ''";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Participa en un gran mundo de fútbol, con campeonatos continentales y copas nacionales, así como también partidos de liga.</p><p>Super Soccer Champs es el fútbol como debería ser: simple, rápido, fluido y con el poder de jugar pases de hacer o romper y anotar goles increíbles que se ponen firmemente en tu manos.</p><p>Descarga&nbsp;<strong>Super Soccer Champs 2019</strong>&nbsp;apk &nbsp;ultima version&nbsp;en LOMUCHACHOgames y disfruta del fútbol en su máxima expresión.</p><p><strong>Super Soccer Champs 2019</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Modo desafío diario</li><li>Sistema de entrenamiento mejorado</li><li>Editor de datos de Equipo completo y Jugador</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';