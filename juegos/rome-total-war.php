<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'ROME: Total War'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "7.0 o +";
$texto = "<p>En Rome:Total War APK + OBB vas a entrar en la batalla para conquistar y gobernar el viejo mundo, luchando en batallas espectaculares en tiempo real en una gran campaña por turnos. Los jugadores experimentarán la expansión del Imperio Romano a partir de la historia del 270 a. C. y se convertirán en una potencia mundial. En el juego, los jugadores pueden manipular un total de 21 fuerzas diferentes, experimentar la supremacía de la monarquía y expandir su territorio a través de la guerra, la estrategia, el comercio, la diplomacia y otros medios.</p><p>Ademas hay otras muchas características las cuales convierten a este juego de acción y estrategia en uno de los mejores para Android, desencadena épicas batallas. En primer lugar, en el mapa mundial, el jugador puede controlar directamente sus propias tropas para moverse. Cuando el jugador hace clic en su personaje, puede ver el rango en el que el personaje puede moverse, y luego arrastra el dedo directamente para permitir que las tropas viajen a la ubicación correspondiente. Cuando el jugador se mueve a otras ciudades-estado o posiciones de guarnición enemigas, puede atacarlo. Todavía hay muchas formas de guerra en el juego, como la guerra de asedio, la guerra de encuentros, etc. Sin embargo, las condiciones para la victoria son las mismas, es decir, las fuerzas enemigas se eliminan por completo.<br>Descargar <strong>Rome: Total War </strong>APK + OBB gratis para Android full en español en LOMUCHACHOgames.</p><p>LOMUCHACHOgames te brinda mas información acerca de Total War para Android.</p><ul><li>ROMA EN TUS MANOS</li><li>BATALLAS COLOSALES</li><li>TÁCTICAS ÉPICAS&nbsp;</li><li>19 FACCIONES JUGABLES</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';