<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'FINAL FANTASY IX'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>FINAL FANTASY IX es uno de los juegos mas aclamados por la critica japonesa, la historia este juego te va a llevar a conocer a la compañía Tantulos quienes quieren secuestrar a la princesa. Pero esta ya tenia planes para fugarse a tierras desconocidas.</p>
<p>En su viaje la princesa Garnet lleva a su fiel guardaespaldas y conocerá a un hombre que la acompañara durante toda su travecia. Acompaña a este grupo de personas a traves de los grandes lugares de FINAL FANTASY IX para Android.</p>
<p>Descargar <strong>Final Fantasy IX</strong> apk + obb gratis para Android en LOMUCHACHOgames y segui esta inspiradora historia.</p>";
include_once '../templates/game/v1.php';