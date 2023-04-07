<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Clue HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "";
$texto = "<p>Únete a la señorita Amapola, al coronel Rubio, al señor Prado, a la doctora Orquídea y al profesor Mora en una noche de misterios y asesinatos en la mansión Tudor.</p>

<p>Tira el dado, muévete por la habitación y haz preguntas. \"¡Yo creo que ha sido la señorita Amapola con la cuerda en el estudio.</p>

<p>Descargar<strong> Clue HACK </strong>apk gratis para Android en LOMUCHACHOgames y encuentra al asesino, haz deducciones brillantes y resuelve el crimen antes que nadie.</p>";
include_once '../templates/game/v1.php';