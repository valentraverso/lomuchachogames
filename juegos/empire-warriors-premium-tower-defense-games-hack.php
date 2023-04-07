<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Empire Warriors Premium: Tower Defense Games HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Si eres un fan de los juegos de torre de defensa gratis y juegos de estrategia, Empire Warriors Premium: Tower Defense Games es un juego adictivo imprescindible que no se puede perder en tu carpeta de \"juegos desafiantes\".</p><p>Con poderosos héroes, torres únicas, desafíos épicos y también momentos divertidos que se combinan en este juego de defensa de torre gratis, Empire Warriors Premium satisfará su demanda.</p><p>Descarga&nbsp;<strong>Empire Warriors Premium: Tower Defense Games HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y demuestra tu poder.</p><p><strong>Empire Warriors Premium: Tower Defense Games HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Fantasy Story</li><li>Mejor juego táctico de TD en un mundo mágico de fantasía</li><li>Construir, Luchar, Defender</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';