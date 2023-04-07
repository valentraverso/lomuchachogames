<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Terraria HACK (Vida y Articulos)'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0.3 o +";
$texto = "<p>Empeza por crear tu personaje a tu gusto, con pelo largo, ojos rojos y ropa hipster, luego crea un mundo normal o grande y por ultimo divertirte hasta no poder mas. Cambien tendrás que combatir contra raros monstruos y crear refugios para protegerte de la noche que es cuando mas sufrirás en este juego.</p><p>Terraria para Android te envolverá en una historia inimaginable y un mundo en 2D lleno de aventuras. Ve a las islas flotantes o baja al inframundo, craftea items o ten mascotas, tu decides tu próximo destino en Terraria.</p><p>Descargar <strong>Terraria HACK</strong> gratis apk en LOMUCHACHOgames y empeza tu aventura.</p><p>Mas cosas sobre <strong>Terraria HACK</strong>:</p><ul><li>Vida Ilimitada</li><li>Articulos Ilimitados</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';