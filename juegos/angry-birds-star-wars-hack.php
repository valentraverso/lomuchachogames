<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Angry Birds Star Wars HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Únete a una aventura épica con los Angry Birds en el legendario universo de la Guerra de las Galaxias. Utiliza la fuerza, empuña el sable de luz y elimina a los Cerdos imperiales en un viaje intergaláctico desde los desiertos de Tatooine hasta las profundidades del Cerdo de la muerte, donde te enfrentarás al terrorífico Darth Vader, Señor Oscuro de los Cerdos.</p><p>Los pájaros rebeldes, atacando desde una base oculta, han logrado su primera victoria contra los malvados Cerdos imperiales.</p><p>Descarga&nbsp;Angry Birds Star Wars HACK&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y salva la galaxia.</p><p>Angry Birds Star Wars HACK APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';