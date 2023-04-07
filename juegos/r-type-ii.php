<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'R-TYPE II'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "2.3.3 o +";
$texto = "<p><strong>R-Type II</strong> es un videojuego de disparos de desplazamiento lateral para máquinas recreativas desarrollado y publicado por Irem en 1989. Este clásico de la vieja escuela es la secuela de R-Type y su historia tiene lugar dos años después de la de este. El jugador controla una nave llamada R-9C, una versión mejorada de su predecesora, la R-9. Acuerdate que tienes controles personalizados, disparo automático ENCENDIDO/APAGADO, dos modos de control que son táctil y por cruz de control virtual y puedes jugar en pantalla completa o mantener el tamaño de la pantalla del juego original.</p><p>El imperio Bydo regreso y acuérdate que deberás ayudándote de los objetos de apoyo, de dos nuevos tipos de armas, el láser buscador y el láser escopeta, y de una nueva bomba con la que atacar a las unidades de tierra.</p><p>Descarga&nbsp;<strong>R-TYPE II</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y destruye tus objetivos principales.</p><p><strong>R-TYPE II</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>CON LAS OPCIONES ORIGINALES</li><li>TODA UNA SERIE DE NUEVAS OPCIONES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';