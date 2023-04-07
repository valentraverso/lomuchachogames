<?php 
include_once '../php/conexion-database.inc.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Plato MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$mediafireapk = $fila['mediafire apk'];
$megaapk = $fila['mega apk'];
if(!empty($fila['mediafire obb'])){
    $mediafire = $fila['mediafire obb'];
}
$mediafireobb = '';
$megaobb = '';
if(!empty($fila['mega obb'])){
    $mega = $fila['mega obb'];
}
$img = "$fila[texto]\" alt=\"Descargar $nombre";
$creator = $fila['creador'];
$texto = "<p>Sí, así es. Platón tiene más de 30 juegos multijugador que incluyen: Table Soccer, Werewolf, Pool, Ocho, Mini Golf, Bankroll, Conspiracy, 4 in a Row, Sea Battle, Hold’em Poker, Minesweepers, Go Fish, BS, Zombie!, Draw Together, Dots &amp; Boxes, Ludo, Literati, Chess, Big Two, Gin Rummy, Dice Party, Dominoes, Rock Card, Smugglers Den, Checkers, Reversi, Spades, Backgammon, Go, Hearts, Baloot and Euchre.</p><p>Más de un millón de personas de todo el mundo usan Plato cada mes para pasársela bien y hacer nuevos amigos, por lo que te encuentras en buena compañía.</p><p>Descarga&nbsp;<strong>Plato MOD</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y diviertete.</p>";
$info = "<p><strong>Plato MOD</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>30+ Juegos Multijugador</li><li>Privacidad por Defecto</li><li>Reunete en Grupos</li></ul>";
$versiondispositivo = "";
$edad = "+15";
$title = "Descarga Plato MOD APK GRATIS para Android APK full.";
$description = "Descarga Plato MOD APK GRATIS para Android APK full. Plato MOD gratis y sin virus para Android.";
$key = "Plato MOD, Plato MOD APK, Games, Plato MOD GRATIS, Plato MOD Android, Descargar Plato MOD,";
$tags = '<a href="https://lomuchachogames.com/apps/categorias/entretenimiento"><b>Entretenimiento</a></b>';
include_once '../plantillas/partall.php';
include_once '../plantillas/partsobre.php';
include_once '../plantillas/part.php';