<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Bad North: Jotunn Edition'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "8.0 o+";
$texto = "<p>Tu hogar está bajo asedio. El rey ha muerto a mano de los invasores vikingos. La esperanza parece una luz distante en la niebla, que se vuelve más tenue a cada momento que pasa. Asumiendo ahora el lugar de tu padre como dirigente, estará bajo tu responsabilidad organizar tus defensas.&nbsp;</p><p>Pero no te equivoques: esta batalla no te conducirá a la victoria, no es más que desesperado intento por sobrevivir.</p><p>Descarga&nbsp;<strong>Bad North: Jotunn Edition</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y recorre otro planeta</p><p><strong>Bad North: Jotunn Edition</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>ROGUELITE TÁCTICO EN TIEMPO REAL</li><li>CONTROLES DE UNIDAD INTELIGENTES</li><li>ISLAS GENERADAS PROCEDIMENTALMENTE</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';