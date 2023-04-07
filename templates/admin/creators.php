<?php
include_once '../include/user.php';
include_once '../include/usersession.php';
if(isset($_SESSION['usuario'])){
    //echo "hay sesion";
    $usuario->setUser($userSession->getCurrentUser());
}else if(isset($_POST['usuario']) && isset($_POST['contrasena'])){ 
     $userForm = $_POST['usuario'];
    $passForm = $_POST['contrasena'];
    $usuario = new User();
    if($usuario->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
        $userSession->setCurrentUser($userForm);
        $usuario->setUser($userForm);
    }else{
    }
}else{
    //echo "login";
    header("location:../admin");
}?>
<?php
echo '<head>';
include_once '../plantillas/headerjuegos.php';
echo '  <link rel="stylesheet" href="../css/bienvenido.css">';
echo '
  <title>Juegos privados dentro de LOMUCHACHOgames</title><meta name="googlebot" content="noindex"> </head><body>';
?>
<div class="dios" style="max-width:98%;">
     <div class="row">
        <div class="col-md-2" id="lateral" style="position:fixed">      
            <br>
            <a href="../admin/" rel="nofollow" class="crear"><b>Inicio</b></a>
            <hr>
            <a href="../admin/juegos.php?pagina=1" rel="nofollow" class="crear"><b>Juegos</b></a>
            <hr>
              <a href="../admin/privado.php" rel="nofollow" class="crear"><b>Privado</b></a>
            <hr>
            <a href="../admin/creador.php" rel="nofollow" class="crear"><b>Crear juegos</b></a>
            <hr>
            <a href="../admin/crearapp.php" rel="nofollow" class="crear"><b>Crear apps</b></a>
            <hr>
            <a href="../admin/creators" rel="nofollow" class="crear"><b>Creadores</b></a>
            <hr>
            <a href="http://localhost/phpmyadmin" class="crear" target="_blank" rel="nofollow"><b>Editar Base de Datos</b></a>
            <hr>
            <a href='../' class="crear"><b>Volver al HOME</b></a><br>
            <br>
        </div>
        <style>
            .col-md-9{font-size:18px;}
        </style>
         <div class="col-md-9" style="margin-left:270px;">
             <?php
                include_once '../php/conexion-database.inc.php';
                 $tomar = "SELECT * FROM creadores";
                 $lito = $conn->query($tomar);
                 $lit = $conn->query($tomar);
                 $l = mysqli_fetch_array($lito);
             if(!empty($_GET['id'])){
                 echo'
             <div class="formulario">
             <form action="https://lomuchachogames.com/admin/creators" method="post">
                 <input type="hidden" value="agregar" name="tipo">
                 <input type="hidden" value="'.$l['nombre'].'" name="old">
                 <label>Nombre</label><br>
                 <input type="text" value="'.$l['nombre'].'" name="nombre"><br>
                 <label>Descripcion</label><br>
                 <textarea type="text" name="descripcion" cols="100">'.$l['text'].'</textarea><br><br>
                 <input type="submit" value="Listorti">
                 </form>
             </div>
             ';}
             if(isset($_GET['crear'])){
                                  echo'
             <div class="formulario">
             <form action="https://lomuchachogames.com/admin/creators" method="post" enctype="multipart/form-data" >
                 <input type="hidden" value="crear" name="tipo">
                 <label>Nombre</label><br>
                 <input type="text" name="nombre"><br>
                 <label>Descripcion</label><br>
                 <textarea type="text" name="descripcion" cols="100"></textarea><br>
                 <input type="file" name="imagen"><br><br>
                 <label>Logo</label>
                 <input type="submit" value="Listorti">
                 </form>
             </div>';
             }
             if(!empty($_POST['tipo'])){
                 if($_POST['tipo'] == "agregar"){
                     if(!empty($_POST['nombre'])){
                         $actualizar ="UPDATE creadores SET nombre = '$_POST[nombre]' WHERE nombre = '$_POST[old]'";
                         $conn->query($actualizar);
                         $listo = "<div class=\"alert alert-warning\">Recarga para efectuar los cambios.</div>";
                     }
                     if(isset($_POST['descripcion'])){
                         $actualizar ="UPDATE creadores SET text = '$_POST[descripcion]' WHERE nombre = '$_POST[old]'";
                         $conn->query($actualizar);
                         $listo = "<div class=\"alert alert-warning\">Recarga para efectuar los cambios.</div>";
                     }
                 }else if($_POST['tipo'] == "crear"){
                         $nombre_img = $_FILES['imagen']['name'];
                         $directorio = $_SERVER['DOCUMENT_ROOT'].'/fotos/creadores/';
                         move_uploaded_file($_FILES['imagen']['tmp_name'],$directorio.$nombre_img);
                         $ruta = "https://lomuchachogames.com/fotos/creadores/".$nombre_img;
                         $insertar = "INSERT INTO `creadores` (`id`, `nombre`, `foto`, `text`) VALUES (NULL, '$_POST[nombre]', '$ruta', '$_POST[descripcion]');";
                         $conn->query($insertar);}
        
             }
             if(isset($listo)){
                 echo $listo;
             }
             ?>
             <h2>Creadores<a href="https://lomuchachogames.com/admin/creators?crear=si"><i class="glyphicon glyphicon-plus"></a></i></h2>
             <div class="creadores">
             <?php
                 while($f = mysqli_fetch_array($lit)){
                     echo '
                     <a href="https://lomuchachogames.com/admin/creators?id='.$f['nombre'].'">
                     <div class="crea" onclick="modify(this)">
                     <div class="logo">
                     <img src="'.$f['foto'].'">
                     </div>
                     <div class="creaname">
                     <span>'.$f['nombre'].'</span>
                     </div>
                     </div>
                     </a>
                     ';
                 }
                 ?>
             </div>
             </div>