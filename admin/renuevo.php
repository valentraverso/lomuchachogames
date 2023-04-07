<?php
$id = $_GET['id'];;
$versiondispositivo = $_GET['v'];
include_once '../includes/conection.php';

$select = "SELECT * FROM juegos WHERE id = $id";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);

    $link = $fila['link'];
    $nom = $fila['nombre'];
    $nombre = str_replace("'", "\'", $nom);
    $ll = str_replace('https://lomuchachogames.com/', '../', $link);

header("location: https://lomuchachogames.com/admin/renovar");

include_once $ll.".php";

$caca = str_replace('"', '\"', $texto);
$info = str_replace('"', '\"', $info);

    $julio = fopen("$ll.php", "w+");
    $tt = '<?php
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/conection.php\';
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/includes/tomardatos.php\';
$select = "SELECT * FROM juegos WHERE nombre = \''.$nombre.'\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$versiondispositivo = "'.$versiondispositivo.'";
$texto = "'.$caca.$info.'";
include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/game/v1.php\';';
    fwrite($julio, "$tt");
    fclose($julio);

