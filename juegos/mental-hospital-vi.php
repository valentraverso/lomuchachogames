<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mental Hospital VI'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Trabajas como reportero para un pequeño periódico local. Una buena tarde, recibe un mensaje de su amiga Ada de que algo místico está sucediendo en las cercanías del Hospital Psiquiátrico de Santa Mónica.</p><p>Trajeron a los psicópatas más desesperados de todos los estados!. Entonces tomas una cámara de video y decides comprobar qué estaba pasando realmente allí. Pero la historia en la que te estás metiendo es tan aterradora que la recordarás toda tu vida. Y depende solo de usted si puede desentrañar esta maraña de caos y horror y sobrevivir.</p><p>Descarga&nbsp;<strong>Mental Hospital VI</strong>&nbsp;apk + datos obb en su ultima version&nbsp;en LOMUCHACHOgames y no te asustes.</p><p><strong>Mental Hospital VI</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Muchos monstruos y animales que dan miedo.</li><li>Muchos niveles disponibles para completar.</li><li>Una cámara de video que le permite ver en la oscuridad.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';