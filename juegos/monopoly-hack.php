<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Monopoly HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Compra, vende y planea tu estrategia para ganar dinero a raudales en MONOPOLY, el popular juego de mesa de Hasbro y un clásico familiar atemporal del que disfrutan millones de personas en todo el mundo, tu juego de mesa favorito.</p><p>Disfruta del clásico juego de mesa de una forma completamente nueva. MONOPOLY de Marmalade Game Studio para Android da nueva vida al clásico tablero con una fantástica ciudad animada en 3D y ha sido diseñado con todo lujo de detalles para ofrecer una experiencia móvil interactiva y de fácil manejo que cautivará a toda la familia.</p><p>Descarga&nbsp;<strong>Monopoly HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y hazte millonario.</p><p><strong>Monopoly HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';