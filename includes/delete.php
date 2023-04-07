<head>
    <title>Confirmacion de borrado</title>
    <link href="../css/edit.css" rel="stylesheet"><link href="../css/bootstrap.css" rel="stylesheet">
</head>
<?php

$get = $_GET['name'];

echo '
    <div class="dios">
    <div class="confirmation">
    <h2> ¿Estas seguro de BORRAR ' . $get . '?</h2>
        <div class="buttn">
    <form method="post">
      <input type="submit" value="Confirmar" name="si" class="btn btn-success">
      <input type="submit" value="Cancelar" name="si" class="btn btn-danger">
      </form>
      </div>
      </div>';

$que = $_POST['si'];
//Cambiar espacios por guiones
    $t = str_replace(" ", "-", $get);
    $te = str_replace("", ":", $t);
    $texto_guion = strtolower($te);
//Pagina de juego
    $link = $te .'.php';
     
include_once '../php/conexion-database.inc.php';
         
if (empty($que)) {

} else {
    if (strpos($que, "Confirmar") !== false) {
        $consulta = "SELECT * FROM juegos WHERE nombre = '$get'";
        $datos = mysqli_query($conn, $consulta);
        $fila = mysqli_fetch_array($datos);
        $id = $fila['id'];
        $consulta = "DELETE FROM `juegos` WHERE `juegos`.`id` = $id";
        $datos = mysqli_query($conn, $consulta);
             unlink("../juegos/$link");
        $consulte = "SELECT * FROM apps WHERE nombre = '$get'";
        $dato = mysqli_query($conn, $consulte);
        if($fila = mysqli_fetch_array($dato)){
        $idapp = $fila['id'];
        $consulta = "DELETE FROM `apps` WHERE `apps`.`id` = $idapp";
        $datos = mysqli_query($conn, $consulta);
          unlink("../apps/$link");
        }
             $private = "SELECT * FROM privado WHERE nombre = '$get'";
        $dat = mysqli_query($conn, $private);
        if($fila = mysqli_fetch_array($dat)){
        $idp = $fila['id'];
        $consulta = "DELETE FROM `privado` WHERE `privado`.`id` = $idp";
        $datos = mysqli_query($conn, $consulta);
          unlink("../privado/$link");
        }
        header("location: ../admin/juegos.php");
    } else {
        header("location: http://lomuchachogames.com/admin/juegos.php");
    }
}
?>
