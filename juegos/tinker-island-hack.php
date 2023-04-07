<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Tinker Island HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.2 o +";
$texto = "<p>Naufragas en una isla tropical. Conviértete en el líder de los supervivientes en este remoto paraiso. Guíalos en la aventura de sus vidas, construye una base, resuelve misterios o busca tesoros, lucha contra feroces enemigos, domestica bestias salvajes, despierta pasiones y resuelve acertijos, elige tu propia aventura, explora un mundo enorme y exuberante, vive una experiencia en una isla parlante, enfréntate a sus innumerables peligros, busca recursos para sobrevivir, construye una base y mejora las estructuras, fabrica armas y herramientas.</p><p>Atención, recuerda que en la isla no hay wifi y tendras que desenvolverte como un lider para poder llevar a todos hacia el triunfo que se propongan, no te distraigas de tus objetivos y sigue hasta el final.</p><p>Descarga&nbsp;<strong>Tinker Island HACK</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y desvela el terrible secreto de Tinker Island.</p><p><strong>Tinker Island HACK</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Gemas Ilimitadas</li><li>Articulos Ilimitados</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';