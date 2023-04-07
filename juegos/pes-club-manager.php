<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'PES CLUB MANAGER'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Implementamos una importante actualización que incluye las plantillas de la temporada 2018-19 y la mejora de la IA de los partidos<br>PES CLUB MANAGER es un título único en la serie Pro Evolution Soccer que pone a prueba tus conocimientos tácticos y tus habilidades de gestión futbolística como ningún otro juego. Únete a más de 30 millones de directores técnicos de todo el mundo y descubre si tienes lo necesario para llevar a tu equipo a la gloria.</p><p>Vive los partidos en 3D y disfruta de unos gráficos mejorados de la mano del nuevo motor de juego. También puedes cambiar a 2D para analizar cada jugada del partido desde una perspectiva táctica.</p><p>Descarga&nbsp;<strong>PES CLUB MANAGER</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta del deporte rey.</p><p><strong>PES CLUB MANAGER</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVO MOTOR GRÁFICO BASADO EN LA VERSIÓN PARA DISPOSITIVOS MÓVILES DE \"PRO EVOLUTION SOCCER 2019\"</li><li>LICENCIAS OFICIALES DE TODO EL MUNDO</li><li>AMOLDA TU EQUIPO A TU ESTRATEGIA</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';