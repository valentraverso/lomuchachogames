<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Five Nights at Freddys FNaF World'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Únete a tus animatrónicos favoritos en un mundo totalmente nuevo. El legendario Five Nights at Freddy's está de vuelta y trae novedades. Freddie, Bonnie, Chica, Foxy y todos los demás te están esperando en este fantástico juego juego RPG con el que podrás controlar a tus animatrónicos encantados favoritos. Disfruta de los bonitos gráficos llenos de colores a los que las distintas ediciones de Five Nights at Freddy’s nos tiene acostumbrados. Todo se está rompiendo y distorsionando… es el momento de que tomes las riendas de Freddy y de su terrible pandilla de animatrónicos.</p><p>Elige una estrategia con la que acabar con tus enemigos sedientos de sangre. Puedes elegir entre una gran variedad de increíbles armas. Encuentra los problemas y el origen de estos, y mantente alerta en todo momento para que no te sorprendan los peligros que se esconden en la sombra.</p><p>Descarga&nbsp;<strong>Five Nights at Freddys FNaF World</strong>&nbsp;apk ultima version&nbsp;en LOMUCHACHOgames y disfruta de la ultima entrega de el mundo del terror.</p><p><strong>Five Nights at Freddys FNaF World</strong> APK para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Puedes elegir entre más de 40 personajes.</li><li>Finales múltiples y distintos niveles de dificultad.</li><li>El FNAF World hará que no seas capaz de soltar tu teléfono.</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';