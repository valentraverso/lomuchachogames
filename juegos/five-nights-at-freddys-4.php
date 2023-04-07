<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Five Nights at Freddys 4'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>En este último capítulo de las cinco noches en la historia original de Freddy, debe una vez más defenderse contra Freddy Fazbear, Chica, Bonnie, Foxy, y cosas aún peores que acechan en las sombras. Jugando como un niño, cuya función es aún desconocida, debe protegerse a sí mismo hasta las 6 am viendo las puertas, así como la guardia de criaturas no deseadas que pueden aventurarse en su armario o en la cama detrás de usted.</p><p>Usted sólo tiene una linterna para protegerse. Será ahuyentar a las cosas que pueden ser rastrero en el otro extremo de los pasillos, pero tenga cuidado, y escuchar. Si algo se ha deslizado demasiado cerca, a continuación, brillantes luces en sus ojos será su fin.</p><p>Descarga&nbsp;<strong>Five Nights at Freddys 4</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y disfruta de el último round.</p><p><strong>Five Nights at Freddys 4</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Este juego requiere al menos 512 megas de RAM.&nbsp;</li><li>Los teléfonos con menos que eso puede bloquearse.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';