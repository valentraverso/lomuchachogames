<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Castle of Illusion'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.3 o +";
$texto = "<p>Mickey Mouse regresa para protagonizar Castle of Illusion, una fantástica revisión del clásico de Sega Genesis. Cuando la malvada bruja Mizrabel rapta a Minnie, Mickey deberá superar los peligros del Castillo de la ilusión para rescatarla.&nbsp;</p><p>Haz acopio de valor para cruzar bosques encantados, enfrentarte a las hordas de juguetes rebeldes y recorrer los laberintos de libros vivientes.</p><p>Descarga&nbsp;<strong>Castle of Illusion</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y ayuda Mickey.</p><p><strong>Castle of Illusion</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Juega como Mickey Mouse en esta nueva versión del clásico de Sega Genesis/Mega Drive</li><li>Experimenta un mundo maravilloso que cobra vida con novedosos gráficos y aventuras mágicas</li><li>Recorre cinco mundos mágicos plagados de los poderosos sirvientes de Mizrabel</li><li>Completa desafíos ocultos para personalizar a Mickey con cinco trajes clásicos</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';