<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Lemmings HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Embárcate en un viaje épico a través de las maravillas del universo al rescatar Lemmings lindos y adorables,y guiarlos a través de niveles llenos de peligros y trampas. Haz que tus Lemmings trabajen y transforma cada planeta que visitas con un entorno hostil en una utopía llena de diversión donde tus Lemmings puedan soltar su cabello y divertirse.</p><p>El clásico juego de rompecabezas de los 90, repensado para que vivas la mejor experiencia en tu dispositivo móvil, el único juego oficial de Lemmings, Lemmings está de vuelta y es más grande que nunca.</p><p>Descarga&nbsp;<strong>Lemmings HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y descubre todo los acertijos.</p><p><strong>Lemmings HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>MOD del Juego</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';