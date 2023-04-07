<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE id = '520'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Llega este divertido juego de carreras lleno de acción que te mantendrá entretenido durante semanas, equípate junto a Barry Steakfries con geniales mochilas propulsoras y disfraces, para dar un paseo salvaje en su interminable búsqueda para ver si puedes llegar al final del laboratorio.</p><p>Pilotea las mochilas propulsoras más geniales en la historia de los videojuegos, surfea el \"wave-rider\" en todo su esplendor, personaliza tu look con ridículos atuendos y mas.</p><p>Descarga&nbsp;<strong>Jetpack Joyride MOD</strong>&nbsp;apk en su ultima version para Android&nbsp;en LOMUCHACHOgames y llega lo mas lejos que puedas.</p>";
$info = "<p><strong>Jetpack Joyride MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
$versiondispositivo = "4.4 o +";
$mod = "MOD";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';