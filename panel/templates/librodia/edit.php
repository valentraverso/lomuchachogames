<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-librodia.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-librodia.php';

$id = $_GET['id'];
$type = $_GET['type'];

$select = "SELECT * FROM book WHERE id = '$id'";
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
                    <p>¡Espectacula! El juego fue editado.<span class="closeBox"><a href="https://admin.lomuchachogames.com/librodia/edit?id=<?php echo $id ?>">X</a></span></p>
                </div>
                <?php
            }else if($code == 2){
                ?>
                <div class="successBox">
                    <p>¡Aca esta tu creación! Tiene vida el hijo de la chingada.<span class="closeBox"><a href="https://admin.lomuchachogames.com/librodia/edit?id=<?php echo $id ?>">X</a></span></p>
                </div>
                <?php
            }
        }
        ?>
         <form action="https://librodia.com/includes/edit.php?redirect=https://admin.lomuchachogames.com/librodia/edit?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
            <div class="angles">
                <div class="leftAngle">
            <div class="box">
                <p class="tagModify">Titulo</p>
                <input type="text" name="title" placeholder="Titulo" value="<?php echo $s['title'];?>">
            </div>
            <div style="height:20px"></div>
           <div class="box cincuenta">
              <div class="dedecha">
                  <p class="tagModify">EPUB</p>
                <input type="text" name="epub" placeholder="EPUB" value="<?php echo $s['epub'];?>">
              </div>
              <div class="dedecha">
                  <p class="tagModify">PDF</p>
                <input type="text" name="pdf" placeholder="PDF" value="<?php echo $s['pdf'];?>">
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label class="tagModify">Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"><?php echo $s['text'];?></textarea>
            </div>
            <div style="height:20px"></div>
            <div class="box cincuenta">
                <div class="dedecha">
                <p class="tagModify">Autor</p>
                <input type="text" name="autor" placeholder="Autor" value="<?php echo $s['autor'];?>">
                <p class="tagModify">Categoria</p>
                <input type="text" name="cat" placeholder="Categoria" value="<?php echo $s['cat'];?>">
                </div>
                <div class="dedecha">
                <p class="tagModify">Saga</p>
                <input type="text" name="saga" placeholder="Saga" value="<?php echo $s['saga'];?>">
                <p class="tagModify">Numero de la saga</p>
                <input type="text" name="num" placeholder="Numero de la saga" value="<?php echo $s['num'];?>">
                </div>
            </div>
            </div>
            <div class="rightAngle">
                <div class="box">
                    <p class="tagModify">Poster</p>
                    <div id="preview"><img src="<?php echo $s['img'];?>"></div>
                    <input type="file" class="form-control-file" name="img" size="20" id="file" accept="image/*">
                </div>
                       <div style="height:20px"></div>
                <div class="box">
                    <input type="hidden" name="id" value="<?php echo $id;?>">
                    <input type="hidden" name="type" value="<?php echo $type;?>">
                    <button class="btn btnSuccess">Subir</button>
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