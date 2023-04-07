<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Real Boxing 2 ROCKY HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>Lleva el combate un paso más allá en Real Boxing 2 ROCKY, la primera experiencia auténtica de ROCKY para móvil.</p>

<p>Pelea como el legendario Rocky Balboa y desafía a Apollo Creed, Clubber Lang e Ivan Drago, entre muchos otros, para llegar a ser el campeón del mundo.</p>

<p>Descargar <strong>Real Boxing 2 ROCKY HACK </strong>para Android APK + OBB gratis en LOMUCHACHOgames y dale una paliza a cualquiera que se te cruze por el camino.</p>";
include_once '../templates/game/v1.php';