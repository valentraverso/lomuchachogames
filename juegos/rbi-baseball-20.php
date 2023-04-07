<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'RBI Baseball 20'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Las leyendas. Nacen. Aquí. Alcanza la grandeza con tu equipo de la MLB en R.B.I. Baseball 20. R.B.I. redefine el béisbol con grandes avances y mejoras. Elige el lanzamiento según datos del lanzador, intenta sacar la pelota del estadio o busca el contacto y usa los elegantes controles de corrida de bases.&nbsp;</p><p>La nueva cámara de lanzamiento al estilo TV ofrece una nueva perspectiva. Cabello renovado y detalles como ojos negros, brea en los cascos y manchas de tierra y hierba.</p><p>Descarga&nbsp;<strong>R.B.I. Baseball 20</strong>&nbsp;apk + datos obb en su ultima version para Android&nbsp;en LOMUCHACHOgames y disfruta de la MLB.</p>";
$info = "<p><strong>R.B.I. Baseball 20</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Tus modos favoritos</li><li>Juega con los grandes</li><li>Actualizaciones semanales</li><li>Gran banda sonora</li></ul>";
$versiondispositivo = "5.1 o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';