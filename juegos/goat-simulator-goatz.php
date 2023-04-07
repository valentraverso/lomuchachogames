<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Goat Simulator GoatZ'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Bienvenido al mejor juego simulador de cabras que existe para Android. Goat Simulator GoatZ es una de las tantas amplificaciones que hay de Goat Simulator, en este hay zombis y otras cositas mas que son muy interesantes.</p><p>Juega con tu cabra y ve saltando por diferentes lugares del mapa, da cuernazos y has muchas mas cosas. Descarga este juego gratis para tu celular y saca tu animal interior. El juego también agregó el modo de supervivencia, debes comer cada cinco minutos para sobrevivir, debes convertir a las personas en zombis.</p><p>Descarga&nbsp;<strong>Goat Simulator GoatZ</strong>&nbsp;gratis apk + datos obb ultima version para Android en LOMUCHACHOgames y controla una cabra endemoniada.</p><p>Mas cosas sobre Goat Simulator GoatZ:</p><ul><li>Sistema de creacion de mundos</li><li>Hay Zombis</li><li>Mapa grande con muchas aventuras</li><li>Modo Supervivencia</li><li>Muchas nuevas cabras para desbloquear</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';