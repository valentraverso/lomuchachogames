<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$get = $_GET['name'];
$get = str_replace("'", "\'", $get);

include_once '../includes/conection.php';
$consulta = "SELECT * FROM apps WHERE nombre = '$get'";
$datos = mysqli_query($conn, $consulta);
$fila = mysqli_fetch_array($datos);
?>
<html>
    <head>
        <title>Estas editando <?php echo $get ?> - LOMUCHACHOgames</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximium-scale=1">

        <link rel="icon" type="image/png" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png"/>
        
        <link rel="stylesheet" href="https://lomuchachogames.com/css/general.css?v=3.0">
        <link rel="stylesheet" href="https://lomuchachogames.com/css/bienvenido.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    </head>
    <body>
        <script> function agregar(){ var add = document.querySelector('.add'); if(add.id == "close"){ add.id = "open"; }else{ add.id = "close"; } } </script>
<?php include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/menu/menu.php'; ?>
<div class="dios">
                <form enctype="multipart/form-data" action="https://lomuchachogames.com/includes/editar/editapp.php" method="post">
                    <div class="todo row">
                        <?php
                        echo ' <div class="col-md-10">
                        <div class="parte">
                        <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> Principal </h3>
                                <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Nombre del Juego</label><br>
                            <input class="form-control" name="nombre" value="' . $fila['nombre'] . '"required>
                            </div>
                            <div class="col-md-6">
<label style="margin-bottom: -2px;">Version</label>
<input name="version" class="form-control" value="' . $fila['version'] . '" type="text">
</div>
</div>
</div>
<div class="parte">
<div class="insides">
<h3 style = "padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> LINKS y INFO </h3><br>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mediafire APK Link</label><br>
<input name="mediafireapk" class="form-control" value="' . $fila['mediafire apk'] . '" type="text"><br>
</div>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mega APK Link</label><br>
<input name="megaapk" class="form-control" value="' . $fila['mega apk'] . '" type="text"><br>
</div>
';
                        if (!empty($fila['mediafire obb']) && !empty($fila['mega obb'])) {
                            echo '<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mediafire OBB Link</label><br>
<input name = "mediafireobb" value="' . $fila['mediafire obb'] . '" class = "form-control" type = "text"><br>
</div>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mega OBB Link</label><br>
<input name = "megaobb" value="' . $fila['mega obb'] . '" class = "form-control" type = "text"><br>
                    </div>';
                        }else{
                            echo '
                            <div class="col-md-12"><p onclick="agregar()">+ Agregar OBB</p>
        <div class="add" id="close">
                            <div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mediafire OBB Link</label><br>
<input name = "mediafireobb" class = "form-control" type = "text"><br>
</div>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Mega OBB Link</label><br>
<input name = "megaobb" class = "form-control" type = "text"><br>
</div>
</div></div>';
                        }
                        echo '
                        </div></div>
                        <div class="parte">
                        <div class="insides">
                        <h3 style="padding: 10px; text-decoration: none; color: white; font-weight: bold; display: inline-block; margin-top:-22px; border-right: 30px solid transparent; border-bottom: 30px solid #4c4c4c; height: 0; line-height: 50px;"> INFORMACIÓN </h3>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Tamaño del juego</label><br>
<input name = "tamano" class = "form-control" type = "text" value="' . $fila['tamano'] . '" required><br>
</div>
<div class = "col-md-6">
<label style = "margin-bottom: -2px;">Apto para(edad)</label><br>
<input name = "apto" value="' . $fila['publico'] . '" class = "form-control" type = "text"><br>
</div>
</div>
</div>
<div class="parte">
<div class="insides">
<h3 style = "padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> OTROS </h3><br>
<div class = "col-md-12">
<label style = "margin-bottom: -2px;">Slug</label><br>
<input name = "link" class = "form-control" value="' . $fila['link'] . '" type = "text"><br>
</div>
</div>
</div>
</div>
 <div class="col-md-2" id="public">    
                    <div class="parte padding_dos">
                        <div class="imga">
                            <img src="../' . $fila['texto'] . '">
                            <input type="file" name="img">
                        </div>
                        </div>
                        <div class="parte padding_dos">
                        <div class="imga">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label id="ready" class="form-check-label" for="invalidCheck">
                                    ¿Todo Listo?
                                </label>
                                <div class="invalid-feedback">
                                    Tenes que aceptar para subir el juego.
                                </div><br>
                                <input type="text" name="id" value="'.$fila['id'].'" style="display:none;"> 
                                <input type="submit" class="gonzaloh" value="Editar">
                            </div>
                            </div>
                            </form>
                            <div class="parte padding_dos">
                                  <div class="imga">
                        ';
                        $select = "SELECT COUNT(nombre) FROM version WHERE nombre = '$get'";
                        $datan = $conn->query($select);
                        $fila = mysqli_fetch_array($datan);
                        $count = $fila['COUNT(nombre)'];
                        if ($count > 0) {
                            echo 'Hay ' . $count . ' versiones';
                        }
                        echo '  
                            <hr>
                            ';
                        $texto1 = str_replace(" ", "-", $get);
                        $texto_guion = str_replace(":", "", $texto1);
                        $file = "../juegos/versiones/$texto_guion.php";
                        if (file_exists("../juegos/versiones/$texto_guion.php")) {
                            echo '<p>Existe pagina de versiones</p><a target="_blank" rel="nofollow" href="http://localhost/baljala/public_html/juegos/versiones/' . $texto_guion . '.php"><button type="button" class="btn btn-success">Ver pagina</button></a>';
                        } else {
                            echo '<p> Si desea crear una pagina de versiones para este juego toque el boton</p>
<a target="_blank" href="https://lomuchachogames.com/includes/version.php?name=' . $get . '"><button type="button" class="btn btn-primary">Crear</button></a>                         
                      
                                    </div>';
                        }
                       ?>
                       </div>
                       </div>
                        </div>