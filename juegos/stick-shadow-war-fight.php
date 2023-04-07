<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Stick Shadow: War Fight'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>En Stick Shadow : War Fight lucha con tus personajes y destruí a tus enemigos con tu ki SSJ.&nbsp;¿Fuiste entrenado desde la infancia para ser un luchador? ¿O tienes otros intereses mezclados en tu vida? Piensa en qué metas tendrías. ¿Quieres llegar a ser poderoso para ganar algo, proteger a alguien o solo quieres luchar contra oponentes fuertes?</p><p>Lucha como en dbz y transforma a tus personajes en SSJ. ¡Es hora de dar batallas inolvidables!</p><p>Descarga&nbsp;<strong>Stick Shadow: War Fight</strong>&nbsp;full apk en español en LOMUCHACHOgames y pelea como los grandes de Dragon Ball.</p><p>Lo que trae el Stick Shadow: War Fight:</p><ul><li>Recoge más de 20 caracteres SSJ con estilos únicos de dbz de lucha</li><li>Mejora y desbloquea más de 20 movimientos especiales únicos para cada luchador.</li><li>¡El super saiyan de Stick Fighter tiene el control más básico!</li><li>¡Gráficos de alta calidad! Impresionantes efectos especiales! Stickman saiya fight ssj te presenta la mejor experiencia de juego!</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';