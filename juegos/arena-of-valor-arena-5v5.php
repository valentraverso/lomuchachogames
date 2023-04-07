<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Arena of Valor: Arena 5v5'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Arena of Valor. Arena 5v5 es un juego para Android MMORPG muy parecido a League of Legends, esta muy de moda en China. Este trae un sistema controles y mecanismos muy refinados lo que convierten en uno de los mejores para Android.</p><p>Este multijugador contiene 25 personaje rotativos con un sinfín de habilidades especiales y posibilidades estratégicas.</p><p>Descargar&nbsp;<strong>Arena of Valor: Arena 5v5</strong> para Android APK en LOMUCHACHOgames.</p><p>Lo que trae Arena of Valor apk ultima version:</p><ul><li>Clásico MOBA 5v5, Perfeccionado para Móvil</li><li>Número Creciente de Héroes Legendarios</li><li>Únete a Tus Amigos en Intensas Batallas por Equipo</li></ul>";
include_once '../templates/game/v1.php';