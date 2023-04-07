<?php 
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Shelter A Survival Card Game'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$texto = "<p>El refugio es un nuevo y emocionante juego de zombies tarjeta de duelo. Jugar como un híbrido entre un juego de cartas coleccionables y el género de la defensa del castillo, refugio le proporcionará horas de juego desafiante.</p><p>Defiéndete del ataque zombie a medida que lucha para reunirse con la mujer que amas. Usted define su estrategia, pero ten cuidado.</p><p>Descarga&nbsp;<strong>Shelter: A Survival Card Game</strong>&nbsp;apk en su ultima version&nbsp;en LOMUCHACHOgames y defiéndete de los zombies.</p>";
$info = "<p><strong>Shelter: A Survival Card Game</strong> para Android es una gran opción a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Modo de juego profunda pero accesible. Fácil de aprender. Es difícil de dominar.</li><li>Más de 100 tarjetas de juego.</li><li>Constructor cubierta integrada para el juego profundamente personalizable.</li></ul>";
$versiondispositivo = "2.3 o +";
$mod = "";
include_once '../templates/game/v1.php';