<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Worms 4'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.o +";
$texto = "<p>Cuando el equipo de Team 17 no para de saltar y gritar de emoción, sabes que ha creado un juego triunfador. Los diseñadores de Worms 4 te tenían a ti y a tu dispositivo preferido en mente cuando crearon:&nbsp;</p><p>Cuando juegas, debes aprovechar al máximo tu creatividad para construir tu arma, usar un \"dispositivo genio\", llamar a una fábrica de armas, producir un arma personal única, y también puedes usar esta ventaja para destruir a tu oponente.</p><p>Descargar <strong>Worms 4 </strong>GRATIS para Android ultima version APK + OBB en LOMUCHACHOgames.</p><p>¿Queres saber mas acerca de Worms 4?</p><ul><li>Nuevas armas: ¡provoca el caos con una colección de nuevos diseños de armas, como el cometa Hayley!&nbsp;</li><li>Mejoras de arma: Worms 4 se ha diseñado para ofrecer una experiencia de juego muy gratificante. ¡Los jugadores pueden conseguir más de cien mejoras para sus armas y así volver a sus gusanos más fuertes! Las mejoras de arma se pueden combinar para que se adapten mejor a la estrategia del jugador.&nbsp;</li><li>Cinco espectaculares escenarios: lucha en cinco hermosas regiones dibujadas a mano: Middle Turf, Candiville, Wacky-Habara, Tomorrow Islands y Fro Zone.&nbsp;</li><li>80 misiones para un jugador: pon a prueba tus habilidades en 80 misiones para un jugador. Las misiones no solo se han diseñado para proporcionar al jugador horas de diversión, ¡sino también para enseñar las mejores estrategias de juego de Worms!&nbsp;</li></ul>";
include_once '../templates/game/v1.php';