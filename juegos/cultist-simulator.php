<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Cultist Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>En este infame juego de cartas narrativo roguelike , juega como un buscador de misterios impíos en un escenario de 1920 con temática de dioses ocultos e historias secretas . Conviértete en un erudito de las artes invisibles. Elaborar herramientas y convocar espíritus. Adoctrinar a los inocentes. Toma tu lugar como el heraldo de una nueva era. Este galardonado juego se lanzó por primera vez en PC y cuenta con más de 200,000 jugadores en todo el mundo. Ahora estamos llevando los misterios cósmicos de Cultist Simulator a dispositivos móviles.</p><p>Una novela valiosa de narraciones basadas en la elección. Hay muchos caminos a través de este juego de ambición, apetito y abominación, y muchas formas en que su historia puede terminar.</p><p>Descarga&nbsp;<strong>Cultist Simulator</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y se el mas estratégico.</p><p><strong>Cultist Simulator</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Modo de juego roguelike desafiante</li><li>Narrativa intensa y envolvente</li><li>Un rico mundo Lovecraftiano</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';