<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Room Three'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Por fin ha llegado la tan esperada secuela de los galardonados The Room y The Room Two. Bienvenido a The Room Three, un juego de enigmas físico dentro de un increíble mundo táctil.<br>Atraído a una remota isla, deberás echar mano de tus habilidades para resolver rompecabezas y superar una serie de pruebas concebidas por un misterioso personaje conocido como El Artesano.&nbsp;</p><p>Tiene una experiencia táctil tan natural que casi podrás sentir la superficie de cada objeto, fácil para comenzar pero difícil de dejar, disfruta de una combinación única de intrigantes rompecabezas con una interfaz de usuario sencilla y gira, acerca y examina montones de artefactos para descubrir sus secretos ocultos.</p><p>Descarga&nbsp;<strong>The Room Three</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y gana los diferentes desafios.</p><p><strong>The Room Three</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>DISEÑO FÁCIL DE ENTENDER Y JUGAR</li><li>CONTROLES TÁCTILES INTUITIVOS</li><li>LOCALIZACIONES EXPANDIDAS</li><li>FINALES ALTERNATIVOS</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';