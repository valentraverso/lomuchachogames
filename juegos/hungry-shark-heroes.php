<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Hungry Shark Heroes'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.4 o +";
$texto = "<p>En esta secuela de Hungry Shark, experimentarás nuevas aventuras. Ubicado en el misterioso océano profundo, puedes crear un arrecife de ensueño donde tus tiburones únicos puedan reproducirse y evolucionar.</p><p>Elige a los mejores para unirte a las batallas en tiempo real y de ritmo rápido con una estrategia ingeniosa. Prepárate para explorar territorios oceánicos en todo el mundo y desbloquear tiburones raros y poderosos.</p><p>Descarga <strong>Hungry Shark Heroes&nbsp;</strong>apk y obb gratis en LOMUCHACHOgames y descubre el nuevo mundo sub-acuatico.</p><p>Lo que trae Hungry Shark Heroes para android:</p><ul><li>RAZA TIBURONES ÚNICOS</li><li>BATALLA PARA GANAR</li><li>CONSTRUYE UN ARRECIFE DE SUEÑO</li><li>GUÍA A LA GRANDEZA</li></ul>";
include_once '../templates/game/v1.php';