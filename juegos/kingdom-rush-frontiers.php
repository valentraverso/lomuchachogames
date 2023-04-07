<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Kingdom Rush Frontiers'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>¡Vamos a defender nuestro pueblo hasta la muerte! Ahora en LOMUCHACHOgames esta el Kingdom Rush Frontiers, el juego que con su primera entrega hizo un \"boom\" esta disponible para Android. Lleva a tus tropas a librar batallas en zonas de dragones, plantas carnívoras y &nbsp;hombres del infierno.</p><p>Divertite en este juego de defensa de torres, mejorando tus torres al nivel máximo para arrasar con tu enemigo y mostrarle quien manda. KIngdom Rush Frontiers es un&nbsp;juego suave y bien equilibrado de la Defensa de la Torre del&nbsp;original,&nbsp;agrega el suficiente contenido nuevo en torres, héroes enemigos y locales para que sea otra experiencia increíble.</p><p>Descarga&nbsp;<strong>Kingdom Rush Frontiers</strong>&nbsp;gratis apk + datos obb en LOMUCHACHOgames y enseñale al mundo lo que sabes hacer.</p><p>Alguna caracteristicas del Kingdom Rush Frontiers para Android:</p><ul><li>Mejora torres</li><li>Más de 18 capacidades de torres</li><li>Más de 40 enemigos con capacidades únicas</li><li>Once héroes legendarios</li><li>&nbsp;Unidades y funciones especiales en cada fase</li><li>Mas de 70 logros</li><li>Tres niveles de dificultad, el primero es para maricas.</li></ul>";
include_once '../templates/game/v1.php';