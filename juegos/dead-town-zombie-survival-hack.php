<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Dead Town Zombie survival HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Un incondicional zombie juego de disparos supervivencia, usted tiene que sobrevivir en la ciudad muerta, puedes elaborar, cocinar, y hacer su propia base.Existen y hay muchos tipos de equipos, hay muchos tipos de armas, zombis especiales, y jefes.<br><br>Sobrevive tanto como puedas, y no olvides aniquilar tantos zombies que puedas.</p><p>Descarga&nbsp;<strong>Dead Town Zombie survival HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y se el mejor especialista en matar zombies.</p><p><strong>Dead Town Zombie survival HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Dinero Ilimitado</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';