<?php 
include 'conection.php';

//Lo que se usa
$enlace = 'https://lomuchachogames.com'.$_SERVER['REQUEST_URI'];

if(!empty($_SERVER['REQUEST_URI'])){
//Compruebo si ya esta el enlace en la base de datos
$consulta = "SELECT url FROM clicks WHERE url = '$enlace'";
    $datos = $conn->query($consulta);
    $fila = mysqli_num_rows($datos);
    if($fila > 0){
    $actualizar = "UPDATE clicks SET `int`=`int`+1 WHERE `clicks`.`url`='$enlace'";
    if($conn->query($actualizar)){

    }else{
        echo "Error:" . $conn->error;
    }
}else if($fila == 0){
    $insertar = "INSERT INTO `clicks` (`id`, `int`, `url`) VALUES (NULL, '1', '$enlace')";
    if($conn->query($insertar)){
 
    }else{
        echo "No se agrego";
         echo 'Error: ' . $conn->error;
    }
}
    $consult = "SELECT url FROM tendencias WHERE url = '$enlace'";
    $dato = $conn->query($consult);
    $fil = mysqli_num_rows($dato);
    if($fil > 0){
    $actualiza = "UPDATE tendencias SET `int`=`int`+1 WHERE `tendencias`.`url`='$enlace'";
    if($conn->query($actualiza)){

    }else{
        echo "Error:" . $conn->error;
    }
}else if($fil == 0){
    $inserta = "INSERT INTO `tendencias` (`id`, `int`, `url`) VALUES (NULL, '1', '$enlace')";
    if($conn->query($inserta)){
 
    }else{
        echo "No se agrego";
         echo 'Error: ' . $conn->error;
    }
}
}
?>