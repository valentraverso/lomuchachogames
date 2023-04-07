<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hustle Castle: Castillo Mágico MOD'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>¡Hazte amo y señor de un auténtico castillo medieval! Admite a nuevos súbditos, asígnales tareas, adiestra y protege a tus hombres y mujeres. Desafía a tus rivales y a las leyes de la física durante la construcción y mejora de tu fortaleza.</p>

<p>Descarga <strong>Hustle Castle: Castillo Mágico HACK </strong>apk en LOMUCHACHOgames y se el mejor rey.</p><p>Lo que trae Hustle Castle: Castillo Mágico HACK:</p>
<ul>
 	<li>Utilidades Premium</li>
</ul>";
include_once '../templates/game/v1.php';