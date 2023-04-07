<?php
include_once '../includes/conection.php';
include_once '../include/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'MAD ZOMBIES : Juegos de Zombies Offline HACK'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "4.1 o +";
$texto = "<p>Tu objetivo es zombie, como muchos tipos de juegos de zombies, el objetivo está muerto y enojado. Entonces, para obtener la ventaja en los juegos de zombies, necesitas la estrategia para matarlos a todos, detener a los muertos con un disparo en la cabeza para salvar tu bala, mantener el dedo en el gatillo y dispararles lo más rápido que puedas, si te llegan.</p><p>Descarga <strong>MAD ZOMBIES : Juegos de Zombies Offline HAC</strong>Kapk en LOMUCHACHOgames y elimina a todos.</p><p>Lo que trae MAD ZOMBIES : Juegos de Zombies Offline HACK:</p><ul><li>Dinero Ilimitado</li><li>Billetes Ilimitados</li></ul>";
include_once '../templates/game/v1.php';