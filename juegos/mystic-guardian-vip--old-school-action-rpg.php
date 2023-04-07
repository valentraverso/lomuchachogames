<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Mystic Guardian VIP : Old School Action RPG'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Como grandes fanáticos de los JRPG, los dos creadores de Mystic Guardian se dedicaron a crear un juego que tiene la sensación de los JRPG clásicos en los años 90. Después de 5 años de desarrollo y refinamiento para obtener la atmósfera adecuada, Mystic Guardian finalmente está listo para devolverle al pasado.</p><p>Descarga <strong>Mystic Guardian VIP : Old School Action RPG&nbsp;</strong>apk gratis en LOMUCHACHOgames y descubre este maravilloso mundo nuevo.</p><p>Lo que trae Mystic Guardian VIP : Old School Action RPG gratis:</p><ul><li>Game Story</li><li>Cambio de clase</li><li>Sistema de combate</li></ul>";
include_once '../templates/game/v1.php';