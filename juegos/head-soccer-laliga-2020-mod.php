<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Head Soccer LaLiga 2020 MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Conviértete en una leyenda del fútbol. Impresiona a la FIFA, a la UEFA y a los aficionados de todo el mundo metiendo goles increíbles en los mejores estadios: Santiago Bernabeu, Camp Nou, Wanda Metropolitano.</p><p>Únete a millones de jugadores en este emocionante juego de fútbol y deportes y disfruta jugando con todos tus futbolistas favoritos: Messi, Hazard, Sergio Ramos, Piqué, Joao Felix.</p><p>Descarga&nbsp;<strong>Head Soccer LaLiga 2020 MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y diviertete con los cabezones.</p>";
$info = "<p><strong>Head Soccer LaLiga 2020 MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "MOD";
include_once '../templates/game/v1.php';