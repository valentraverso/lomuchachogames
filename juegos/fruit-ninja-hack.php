<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Fruit Ninja HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Rebana las frutas, no cortes las bombas, ¡eso es todo lo que necesita saber para comenzar con la adictiva acción de Fruit Ninja. Desafíate a ti mismo y mira cuánto tiempo puedes durar en el modo clásico, establece una puntuación alta en el modo arcade o simplemente practica tus habilidades para cortar frutas en el modo zen.&nbsp;</p><p>Una amplia gama de cuchillas y dojos están a tu disposición para ayudarte a cortar en tu camino hacia la cima. Tómate un descanso y experimenta una nueva forma de rebanar tu fruta favorita con los minijuegos, o pon a prueba tu dominio del juego y gana premios en del desafío diario.</p><p>Descarga&nbsp;<strong>Fruit Ninja HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y corta fruta a no poder mas.</p><p><strong>Fruit Ninja HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';