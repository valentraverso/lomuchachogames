<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom Rush Frontiers HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>¡Vamos a defender nuestro pueblo hasta la muerte! Ahora en LOMUCHACHOgames esta el Kingdom Rush Frontiers, el juego que con su primera entrega hizo un \"boom\" esta disponible para Android. Lleva a tus tropas a librar batallas en zonas de dragones, plantas carnívoras y &nbsp;hombres del infierno.</p><p>Divertite en este juego de defensa de torres, mejorando tus torres al nivel máximo para arrasar con tu enemigo y mostrarle quien manda. KIngdom Rush Frontiers es un&nbsp;juego suave y bien equilibrado de la Defensa de la Torre del&nbsp;original,&nbsp;agrega el suficiente contenido nuevo en torres, héroes enemigos y locales para que sea otra experiencia increíble.</p><p>Descarga&nbsp;<strong>Kingdom Rush Frontiers HACK</strong>&nbsp;gratis apk + datos obb en LOMUCHACHOgames y enseñale al mundo lo que sabes hacer.</p><p><strong>Kingdom Rush Frontiers HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';