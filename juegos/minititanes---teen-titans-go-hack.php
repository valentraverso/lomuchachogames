<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Minititanes - Teen Titans Go HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Forma tu equipo y enfrenta enemigos en batallas de tres contra tres. Lanza supermovimientos en tiempo real con la barra de batalla. Cambia tus héroes para hacer ataques sorprendentes y derrotar a tus oponentes.</p><p>Corre de tienda en tienda para encontrar tus figuras de superhéroes favoritas. Haz misiones especiales, participa de torneos y desbloquea nuevas áreas para ganar el Megaminicampeonato de Jump City.</p><p>Descarga&nbsp;<strong>Minititanes - Teen Titans Go HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y crea el equipo ganador.</p><p><strong>Minititanes - Teen Titans Go HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';