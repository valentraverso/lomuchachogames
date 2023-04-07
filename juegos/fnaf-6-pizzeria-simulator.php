<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'FNaF 6 Pizzeria Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>Futuro propietario de un restaurante franquiciado Freddy Fazbear's Pizzeria, te queremos. Lo que comienza como una simple diversión para tirar pizza se convierte en algo mucho, mucho más. Avanza en el deslumbrante juego de arcade para revelar que estás en tu propia pizzería de Freddy Fazbear. Explore nuestros catálogos y compre sus primeras atracciones y animatronics, personalice sus decoraciones y, sobre todo, asegúrese de que todo el equipo funcione correctamente antes de abrir las puertas de su nueva Freddy Fazbear's Pizzeria.</p><p>Después de un día ajetreado, cierre el papeleo y cierre su negocio. Sin embargo, tenga cuidado con lo que podría acechar en las salidas de aire.</p><p>Descarga&nbsp;<strong>FNaF 6 Pizzeria Simulator</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y disfruta de la pizzaeria.</p><p><strong>FNaF 6 Pizzeria Simulator</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Este juego contiene elementos de terror intenso.</li><li>Se requiere un dispositivo con al menos 1 GB de RAM para que este juego funcione correctamente.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';