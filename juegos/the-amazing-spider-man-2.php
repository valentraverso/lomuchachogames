<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'The Amazing Spider-Man 2'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.0 o +";
$texto = "<p>Bienvenido al mejor de Spider-Man para Android, donde tu tendras que trepar muros, lanzar telarañas y salvar al mundo. ¡Salva a Nueva York de Venom, El Duende Verde, Eletro y mas villanos que quieren destruir tu preciada ciudad!</p><p>Descarga&nbsp;&lt;strong&gt;The Amazing Spider-Man 2&nbsp;&lt;/strong&gt;para Android gratis en LOMUCHACHOgames y divertite sin fin junto a Peter Parker y su asombroso traje aracnido.</p><p>Mas sobre The Amazing Spider-Man 2:</p><ul><li>Destruye a tus enemigos</li><li>Ayuda a ciudadanos</li><li>Gánate el respeto de todos</li></ul>";
include_once '../templates/game/v1.php';