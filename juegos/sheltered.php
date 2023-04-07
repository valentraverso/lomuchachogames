<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Sheltered'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.o +";
$texto = "<p>Sheltered es un juego de gestión de recursos ambientado en un mundo posapocalíptico que da un sentido completamente nuevo al concepto de “familia nuclear”.</p>

<p>Tras sobrevivir a los miles de millones que murieron en el holocausto nuclear, debes reunir tantos suministros como puedas mientras te diriges hacia el refugio de cemento subterráneo al que tu familia llamará hogar en el funesto futuro que os espera.</p>

<p>Descargar <strong>Sheltered</strong> apk gratis para Android en LOMUCHACHOgames y sobrevive a este caos.</p><p>Sheltered para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p>
<ul>
<li>Te rodearán peligros mortales en todo momento.</li>
<li>Deberás realizar una elección crucial.</li>
<li>Deberás hacer frente a los constantes asaltos de bestias salvajes.</li>
</ul>";
include_once '../templates/game/v1.php';