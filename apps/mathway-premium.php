<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM apps WHERE nombre = 'Mathway Premium'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Con millones de usuarios y miles de millones de problemas resueltos, Mathway es el solucionador de problemas de matemáticas # 1 del mundo. Desde álgebra básica hasta cálculo complejo, Mathway resuelve instantáneamente sus problemas matemáticos más difíciles: simplemente escriba su problema (o ¡apunte con su cámara y saque una foto!) para recibir respuestas instantáneas gratis.&nbsp;</p><p>Mathway es como un tutor privado en la palma de su mano, que proporciona ayuda inmediata con las tareas en cualquier parte, en cualquier momento.</p><p>Descarga&nbsp;<strong>Mathway Premium</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y resuelve con la libertad que quieras.</p><p><strong>Mathway Premium</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Matemáticas básicas</li><li>Pre-álgebra</li><li>Álgebra</li><li>Trigonometría</li><li>Precálculo</li><li>Cálculo</li><li>Estadística</li><li>Matemáticas finita</li><li>Álgebra lineal</li><li>Química</li><li>Graficación</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/apps/v1.php';