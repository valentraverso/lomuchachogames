<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Charterstone Digital Edition'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>La campaña se compone de una serie de partidas separadas, cada una de las cuales tendrá sus propias reglas y objetivos extras exclusivos. Cada partida se desarrollará a partir de la anterior, y agregará algo nuevo.&nbsp;</p><p>Tus decisiones y tu estilo de juego afectarán el progreso y el final de la campaña. Además, no existen interacciones negativas entre los jugadores. En otras palabras, anotas puntos según tu propia estrategia, no por hundir a tus oponentes.</p><p>Descarga&nbsp;<strong>Charterstone: Digital Edition</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y disfruta de las partidas.</p>";
$info = "<p><strong>Charterstone: Digital Edition</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Escoge uno de los 6 personajes exclusivos para conducir tu transporte&nbsp;</li><li>Descubre edificios, posibilidades de anotar puntos y mecánicas de juego nuevos&nbsp;</li><li>Idea estrategias y organiza a tus trabajadores, edificios y recursos</li></ul>";
$versiondispositivo = "4.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';