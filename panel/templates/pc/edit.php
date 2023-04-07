<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-pc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-pc.php';

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
         <form action="https://pc.lomuchachogames.com/includes/edit?<?php echo 'id='.$_GET['id'].'&type='.$_GET['type']; ?>&pass=dada" method="post" enctype="multipart/form-data">
            <div class="angles">
                <div class="leftAngle">
            <div class="box">
                <input type="hidden" name="type" value="apps">
                <p class="tagModify">Titulo</p>
                <input type="text" name="title" placeholder="Titulo del juego" value="<?php echo $s['title'];?>">
            </div>
            <div style="height:20px"></div>
            <div class="box cincuenta">
                <div class="dedecha">
                <p class="tagModify">Desarrollador</p>
                <input type="text" name="developer" placeholder="Desarrollador" value="<?php echo $s['developer'];?>">
                <p class="tagModify">Fecha de publicación</p>
                <input type="date" name="date" placeholder="Fecha de publicación" value="<?php echo $s['date'];?>">
                </div>
                <div class="dedecha">
                <p class="tagModify">Tags</p>
                <input type="text" name="tags" placeholder="Tags" value="<?php echo $s['tags'];?>">
                <p class="tagModify">Tamaño</p>
                <input type="text" name="size" placeholder="Tamaño" value="<?php echo $s['size'];?>">
            </div>
            </div>
            <div style="height:20px"></div>
           <div class="box">
                <p class="tagModify">Enlace de descarga</p>
                <input type="text" name="downloadLink" placeholder="Enlace de descarga" value="<?php echo $s['dowload'];?>">
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label class="tagModify">Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"><?php echo $s['description'];?></textarea>
            </div>
            <div style="height:20px"></div>
            </div>
            <div class="rightAngle">
                <div class="box">
                    <p class="tagModify">Poster</p>
                    <div id="preview"><img src="<?php echo $s['poster'];?>"></div>
                    <input type="file" class="form-control-file" name="poster" size="20" id="file" accept="image/*">
                </div>
                <div style="height:20px"></div>
                <div class="box">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="type" value="<?php echo $type;?>">
                    <button class="btn btnSuccess">Listo</button>
                </div>
            </form>
            <div style="height:20px"></div>
                <div class="box">
                    <p class="tagModify">Estadisticas</p>
                    <?php
                    $insight = "SELECT SUM(views) AS totalViews FROM insights WHERE idPost = '$id'";
                    $insightC = $conn->query($insight);
                    $insightF = mysqli_fetch_array($insightC);
                    ?>
                    <span>Vistas: <?php echo $insightF['totalViews'];?></span>
                </div>
                            </div>
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