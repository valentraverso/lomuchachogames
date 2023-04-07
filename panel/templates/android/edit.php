<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-android.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-android.php';

$id = $_GET['id'];
$type = $_GET['type'];

$select = "SELECT * FROM $type WHERE id = '$id'";
$selectC = $conn->query($select);

$s = mysqli_fetch_array($selectC);
?>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <?php
        if(isset($_GET['success'])){
            $code = $_GET['success'];
            if($code == 1){
                ?>
                <div class="successBox">
                    <p>¡Espectacula! El juego fue editado.<span class="closeBox"><a href="https://admin.lomuchachogames.com/android/edit?id=<?php echo $id ?>&type=<?php echo $type ?>">X</a></span></p>
                </div>
                <?php
            }else if($code == 2){
                ?>
                <div class="successBox">
                    <p>¡Aca esta tu creación! Tiene vida el hijo de la chingada.<span class="closeBox"><a href="https://admin.lomuchachogames.com/android/edit?id=<?php echo $id ?>&type=<?php echo $type ?>">X</a></span></p>
                </div>
                <?php
            }
        }
        ?>
         <form action="https://lomuchachogames.com/includes/actions/edit.php" method="post" enctype="multipart/form-data">
            <div class="angles">
                <div class="leftAngle">
            <div class="box">
                <input type="hidden" name="type" value="apps">
                <p class="tagModify">Titulo</p>
                <input type="text" name="title" placeholder="Titulo del juego" value="<?php echo $s['nombre'];?>">
            </div>
            <div style="height:20px"></div>
           <div class="box cincuenta">
              <div class="dedecha">
                  <p class="tagModify">Mediafire APK</p>
                <input type="text" name="apk1" placeholder="Mediafire APK" value="<?php echo $s['mediafire apk'];?>">
                <p class="tagModify">Mediafire OBB</p>
                <input type="text" name="obb1" placeholder="Mediafire OBB" value="<?php echo $s['mediafire obb'];?>">
              </div>
              <div class="dedecha">
                  <p class="tagModify">Mega APK</p>
                <input type="text" name="apk2" placeholder="Mega APK" value="<?php echo $s['mega apk'];?>">
                <p class="tagModify">Mega OBB</p>
                <input type="text" name="obb2" placeholder="Mega OBB" value="<?php echo $s['mega obb'];?>">
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label class="tagModify">Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"><?php echo $s['description'];?></textarea>
            </div>
            <div style="height:20px"></div>
            <div class="box cincuenta">
                <div class="dedecha">
                <p class="tagModify">Desarrollador</p>
                <input type="text" name="developer" placeholder="Desarrollador" value="<?php echo $s['creador'];?>">
                <p class="tagModify">Publico</p>
                <input type="text" name="age" placeholder="Edad requerida" value="<?php echo $s['publico'];?>">
                <p class="tagModify">Palabras relacionadas</p>
                <input type="text" name="relatedWords" placeholder="Palabras relacionadas" value="<?php echo $s['relatedWords'];?>">
                </div>
                <div class="dedecha">
                <p class="tagModify">Versión</p>
                <input type="text" name="version" placeholder="Versión" value="<?php echo $s['version'];?>">
                <p class="tagModify">Versión de Android</p>
                <input type="text" name="androidVersion" placeholder="Version de Android" value="<?php echo $s['versionAndroid'];?>">
                <p class="tagModify">Tamaño</p>
                <input type="text" name="size" placeholder="Tamaño" value="<?php echo $s['tamano'];?>">
                </div>
            </div>
            </div>
            <div class="rightAngle">
                <div class="box">
                    <p class="tagModify">Poster</p>
                    <div id="preview"><img src="<?php echo $s['texto'];?>"></div>
                    <input type="file" class="form-control-file" name="poster" size="20" id="file" accept="image/*">
                </div>
                <div style="height:20px"></div>
                <div class="box">
                <?php
                        $select = "SELECT COUNT(nombre) FROM version WHERE nombre = '$s[nombre]'";
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
<a target="_blank" href="https://lomuchachogames.com/includes/version.php?name=' . $s['nombre'] . '"><button type="button" class="btn btn-primary">Crear</button></a>                         
                     ';
                        }
    $getUploader = "SELECT * FROM users WHERE id = '$s[uploader]'";
    $getUploaderConn = $conn->query($getUploader);
    $u = mysqli_fetch_array($getUploaderConn);
    
    $getClicks = "SELECT * FROM clicks WHERE url = '$s[link]'";
    $getClicksConn = $conn->query($getClicks);
    $c = mysqli_fetch_array($getClicksConn);
                       ?>
                       </div>
                       <div style="height:20px"></div>
                <div class="box">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="type" value="<?php echo $type;?>">
                    <button class="btn btnSuccess">Subir</button><a href="<?php echo $s['link']; ?>" target="blank_"><span style="margin-left:30px;">Ver</span></a>
                </div>
                <div style="height:20px"></div>
                <div class="box">
                <span><?php echo $u['username'];?></span> <br>  
                <span>ID: <?php echo $id?></span><br>
                <span>Vistas: <?php echo $c['int'];?></span>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    <script>
                       ClassicEditor
                .create( document.querySelector( '.editor' ) )
                .catch( error => {
                    console.error( error );
                    } );
                                        document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
    </script>