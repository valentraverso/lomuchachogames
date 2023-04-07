<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'WWE Champions 2020 HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>WWE Champions HACK es el juego de lucha que esta explotando en 2020, tenes todos los personajes de WWE y lo mejor es que trae el hack de Skill y Poder para que no pierdas mas batallas.</p>

<p>Disfruta de NUEVAS características, como combates PvP, gráficos mejorados y una acción más rápida que nunca. Lucha con cientos de las Superstars más recientes y los favoritos de siempre. Compite en torneos masculinos, femeninos y mixtos de todo el mundo.</p>

<p>Descargar <strong>WWE Champions HACK </strong>gratis para Andriod en LOMUCHACHOgames y vivi mayor experiencia de lucha.</p><p>WWE Champions mod APK trae todo lo que necesitas para vencer a todos tus enemigos dentro del cuadrilatero.</p>";
include_once '../templates/game/v1.php';