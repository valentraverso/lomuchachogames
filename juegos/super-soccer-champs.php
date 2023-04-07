<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Super Soccer Champs'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Inspirado en títulos legendarios, Super Soccer Chmaps es divertido de aprender y jugar, pero ofrece una profundidad sorprendente.</p><p>Con el juego de la Liga con sede en Inglaterra, Escocia, España, Italia, Japón y China, y Torneos históricos; Vuelve a escribir los libros de registro, sólo su resultado puede cambiar el curso de la historia.</p><p>Descarga&nbsp;<strong>Super Soccer Champs</strong>&nbsp;apk ultima versión&nbsp;en LOMUCHACHOgames y juega los mejores partidos.</p><p><strong>Super Soccer Champs</strong> para Android es una gran opcion a la hora de elegir entre estos juegos. Algunas características de este son:</p><ul><li>Longitud del partido seleccionable</li><li>3 juegos seleccionables velocidades para todos los estilos de cada jugador.</li><li>Guardar repeticiones y reproducirlas para revivir esos goles increíbles.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';