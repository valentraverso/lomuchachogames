<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/tomardatos.php';
$select = "SELECT * FROM juegos WHERE nombre = 'Escapists 2 Fuga de bolsillo'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "5.0.o +";
$texto = "<p>The Escapists 2 es una emocionante y desternillante experiencia de estrategia en mundo abierto que presenta el complicado desafío de escapar de una prisión. Crea tu propio presidiario con cientos de opciones de personalización, ve por tu cuenta o conspira con hasta 3 de tus amigos para idear la fuga definitiva en multijugador local.</p><p>Camúflate en la vida rutinaria de la prisión, cumple tu papel, atiende religiosamente a tu trabajo y no te metas en líos. Con un sistema de combate mejorado, encadenarás y bloquearás ataques para lograr una fuga épica repartiendo leña.</p><p>Descarga&nbsp;<strong>Escapists 2 Fuga de bolsillo</strong>&nbsp;apk + datos obb ultima version&nbsp;en LOMUCHACHOgames y escápate de la mejor manera.</p><p><strong>Escapists 2 Fuga de bolsillo</strong> APK + OBB para Android es una gran opcion a la hora de elegir ente estos juegos. Algunas características de este son:</p><ul><li>Sistema de combate mejorado</li><li>Arréglatelas en la cárcel</li><li>Engaña a los guardias o sobórnalos directamente</li></ul>";
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/game/v1.php';