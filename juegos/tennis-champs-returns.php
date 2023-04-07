<?php 
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Tennis Champs Returns'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>Reconstruido completamente por el programador original de la versión de Amiga, usando los personajes originales y unas animaciones mejoradas, todo esto combinado con un nuevo motor físico, IA, nuevos controles, desafíos diarios y un nuevo y fantástico modo Carrera.</p><p>Los desafíos diarios ofrecen diferentes modos de juego, varios adversarios y minijuegos cada día, con premios que puedes ganar para ayudarte en tu carrera.</p><p>Descarga&nbsp;<strong>Tennis Champs Returns</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y vuelve al tenis.</p>";
$info = "<p><strong>Tennis Champs Returns</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Sistema de desafío Bird'sEye.</li><li>Modo de cámara en perspectiva.</li><li>Animación de revés de una sola mano.</li><li>Daño a la pelota / Bolas nuevas.</li><li>Elige un rival, ¡gana para obtener recompensas adicionales.</li><li>Entrenamiento integrado en la carrera.</li><li>Interfaz de usuario mejorada.</li></ul>";
$versiondispositivo = "5.0.o +";
$mod = "";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';