<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'ePSXe para Android'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>ePSXe es uno de los mejores emuladores que existen, en el vas a poder volver el tiempo atrás y jugar todos los títulos de tu infancia o de PS1. Este emulador esta diseñado para que vaya fluido en cualquier dispositivo móvil y que también se puede jugar entre 1 a 4 jugadores, ademas trae compatibilidad de mando para darle mas dinámica al juego.</p><p>ePSXE for Android trae todo lo que necesitas para revivir esas horas jugando Cash Bandicoot.</p><p>Descarga&nbsp;<strong>ePSXe para Android</strong>&nbsp;gratis full apk en LOMUCHACHOgames y volvamos el tiempo atras al tiempo de los joysticks con cable.</p><p>Mas cosas sobre ePSXe fora Android:</p><ul><li>&nbsp;Vos tenes que colocar los juegos a jugar</li></ul><p>Bios Links:</p><ul><li><a href="http://swarife.com/18932179/biosepsxefa">Mediafire</a></li><li><a href="http://swarife.com/18932179/biosepsxefamega">Mega</a></li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';