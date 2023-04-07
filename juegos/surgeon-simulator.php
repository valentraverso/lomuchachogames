<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Surgeon Simulator'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Trata a Bob, el paciente más gafe del mundo, con tus temblorosas manos. Conviértete en Nigel Burke, un aspirante a cirujano, y lleva a cabo disparatadas intervenciones para intentar salvarle la vida, o fracasa alocadamente mientras el pobre Bob... se muere.</p><p>Opera a quien sea con tus propias manos, pero cuidado el paciente es muy sensible. Tu puedes</p>";
include_once '../templates/game/v1.php';