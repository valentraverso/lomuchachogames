<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'DRAW CHILLY'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>DRAW CHILLY es un juego arcade infernal en el que asumes el papel de Vladimir y levantas una ciudad desde las profundidades del Purgatorio a petición de tus empleadores, los Caballeros del Apocalipsis.&nbsp;</p><p>Vladimir y su escuadrón de mecánicos valientes, de corazón puro, pero ocasionalmente desafortunados luchan contra los monos mientras suben paso a paso para entregar a los jefes, que han terminado en el Purgatorio por error, en manos de los Segadores para que puedan ser enviado al infierno donde pertenecen.</p><p>Descarga&nbsp;<strong>DRAW CHILLY</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y da las mejores batallas.</p><p><strong>DRAW CHILLY</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Ahora Vladimir puede cambiar de dirección cuando ataca.&nbsp;</li><li>El poder del láser Gramps (tercer jefe) disminuyó. Usted puede evitar su rayo láser a tiempo, ya sabe.&nbsp;</li><li>Los botones de flecha de dirección se movieron un poco.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';