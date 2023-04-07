<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Papas Wingeria To Go!'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3 o +";
$texto = "<p>Tendrá que correr las freidoras y lanzar alitas de pollo en una variedad de sabrosas salsas. El restaurante es conocido por sus famosas alas, pero también agregará otras carnes al menú, así como una amplia variedad de deliciosas salsas y un montón de lados y salsas. Starlight City celebra diferentes días festivos durante todo el año, así que prepárate para desbloquear nuevas salsas, acompañamientos y salsas festivas mientras juegas durante los días festivos.</p><p>Sus clientes esperan una excelente presentación, así que organice los alimentos fritos con lados y salsas para que sean agradables a la vista.</p><p>Descarga&nbsp;<strong>Papas Wingeria To Go!</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y recorre otro planeta</p><p><strong>Papas Wingeria To Go! </strong>APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>NUEVAS CARACTERÍSTICAS</li><li>VACACIONES DE VACACIONES</li><li>SERVE RECETAS ESPECIALES</li><li>PERSONALIZA A TUS TRABAJADORES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';