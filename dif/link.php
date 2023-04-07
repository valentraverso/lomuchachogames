 <?php 
    
    include_once '../includes/conection.php';
    
    $res = $_GET['buscajuego'];
    
    if(strlen($res) < 0){
    header('location:https://lomuchachogames.com/');
}else{
    
    $consulta = "SELECT * FROM juegos, apps WHERE nombre = '$res'";
    $datos = mysqli_query($conn, $consulta);
    if($fila = mysqli_fetch_array($datos)){
    $nombre = $fila['nombre']; 
     $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
        $str = strtolower($texto_guion);
       header("location:../juegos/$str");
    }else{  
        include_once '../templates/q/busqueda.php';
    }
    }

    ?>