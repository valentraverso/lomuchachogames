<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Sun Origin HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Acción con elementos RPG en un mundo brutal y post-apocalíptico, un mundo con un alto nivel de radiación, hambre y enfermedades.&nbsp;</p><p>Pocos sobrevivieron a ese ataque mortal desde el espacio, pero al poco tiempo, los sobrevivientes tuvieron que hacer frente a una nueva catástrofe, la del personaje principal, la Comunidad Seleccionada del Norte-216.</p><p>Descarga&nbsp;<strong>The Sun Origin HACK</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y aguanta este mundo post-apocalíptico.</p><p><strong>The Sun Origin HACK</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Aventúrate en un mundo post-apocalíptico con muchas misiones diferentes</li><li>Perfecto sistema de crafteo</li><li>Armen su armadura de poder</li><li>Gráficos hermosos a máxima potencia</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';