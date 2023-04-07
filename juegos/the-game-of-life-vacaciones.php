<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'THE GAME OF LIFE Vacaciones'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Ve de vacaciones, consigue regalos y saca fotos en este divertido juego de mesa para toda la familia. Recorre toda la isla y compite con tu familia y amigos en actividades, como son el buceo o la construcción de esculturas de arena.&nbsp;</p><p>Quien consiga más recuerdos felices, gana Guarda tus recuerdos en el álbum y toma diferentes decisiones para completar la colección.</p><p>Descarga&nbsp;<strong>THE GAME OF LIFE Vacaciones</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y visita Isla Volcán, pásalo en grande y consigue recuerdos</p>";
$info = "<p><strong>THE GAME OF LIFE Vacaciones</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Basado en el clásico juego de mesa The Game of Life</li><li>El juego disfruta de un modo multijugador local y multijugador online seguro</li><li>Elige de un reparto espectacular de personajes</li></ul>";
$versiondispositivo = "7.0 o +";
$mod = "";
include_once '../templates/game/v1.php';