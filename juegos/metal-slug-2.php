<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'METAL SLUG 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p>Previene las ambiciones del restablecido General Morden, y descubre el secreto del segundo golpe de estado, además de la poderosa combinación del dúo más fuerte de la Armada Regular, la escuadra PD Marco y Tarma del primer METAL SLUG, dos mujeres soldados se unen al grupo.</p><p>Además de las nuevas armas como la pistola de láser y la bomba molotov, se han agregado máquinas de guerra como el \"Slug Flyer\" y el bípedo \"Slugnoid\"</p><p>Descarga&nbsp;<strong>METAL SLUG 2</strong>&nbsp;apk + datos obb en su ultima versión&nbsp;en LOMUCHACHOgames y completa las misiones.</p><p><strong>METAL SLUG 2</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Nuevos personajes utilizables y de soporte</li><li>Nuevas armas y vehículos que puedes utilizar en el campo de batalla</li><li>Hemos implementado un sistema de juego para un juego sencillo</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';