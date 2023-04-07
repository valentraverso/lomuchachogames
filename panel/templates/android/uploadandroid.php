<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-android.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-android.php';

$type = $_GET['type'];

if($type=="apps"){
    $categorias = "             <div class='cat'><input type='checkbox' name='categories[]' value='comunicacion'><span>Comunicación</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='citas'><span>Citas</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='compras'><span>Compras</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='entretenimiento'><span>Entretenimiento</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='musica'><span>Musica</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='premium'><span>Premium</span></div>";
}else if($type=="juegos"){
    $categorias="              <div class='cat'><input type='checkbox' name='categories[]' value='acción'><span>Acción</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='aventura'><span>Aventura</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='casual'><span>Casual</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='simulación'><span>Simulación</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='estrategia'><span>Estrategia</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='hack'><span>Hack</span></div>
              <div class='cat'><input type='checkbox' name='categories[]' value='deportes'><span>Deportes</span></div>";
}

if($type == "apps" OR $type == "juegos"){

?>
<div class="micha">
    <div class="michaInside">
        <form action="https://lomuchachogames.com/includes/actions/upload.php" method="post" enctype="multipart/form-data" id="upload">
            <div class="angles">
                <div class="leftAngle">
                    <div class="boxHiddenContent">
                        <div class="alwaysPart box">
                        <div onclick="show(this)" id="hidden" class="Spanish" title="Clikeame para abrir">
                            <span>Español</span>
                            <span id="flechitaShowSpanish">🔼</span>
                        </div>
                        </div>
                       <div class="hiddenPart" id="hideSpanish" style="display:none;">
            <div class="box">
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <input type="text" name="title" placeholder="Titulo del juego" required>
                <p class="tagModify">Palabras Relacionada</p>
                <input type="text" name="relatedWords" placeholder="Palabras relacionadas" value="<?php echo $s['relatedWords'];?>" maxlength="200">
            </div>
            <div style="height:20px"></div>
           <div class="box cincuenta">
              <div class="dedecha">
                  <p>Mediafire</p>
                <input type="text" name="apk1" placeholder="Mediafire APK" required>
                <input type="text" name="obb1" placeholder="Mediafire OBB">
              </div>
              <div class="dedecha">
                  <p>Mega</p>
                <input type="text" name="apk2" placeholder="Mega APK" required>
                <input type="text" name="obb2" placeholder="Mega OBB">
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label>Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"></textarea>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <input type="text" name="developer" placeholder="Desarrollador" required>
                <input type="text" name="size" placeholder="Tamaño" required>
                <input type="text" name="version" placeholder="Versión" required>
                <input type="text" name="androidVersion" placeholder="Version de Android" required>
                <input type="text" name="age" placeholder="Edad requerida" required>
            </div>
            </div> 
                    </div>
                    <div style="height:20px"></div>
                    <div class="boxHiddenContent">
                        <div class="alwaysPart box">
                        <div onclick="show(this)" id="hidden" class="Portugues" title="Clikeame para abrir">
                            <span>Portugues</span>
                            <span id="flechitaShowPortugues">🔼</span>
                        </div>
                        </div>
                       <div class="hiddenPart" id="hidePortugues" style="display:none;">
            <div class="box">
                <label>Descripción Portugues</label>
                <textarea class="editorpr" rows="10" cols="20" name="textoPr"></textarea>
            </div>
            </div> 
            </div>
            <div style="height:20px"></div>
            <input type="checkbox" name="obb" value="+ OBB "><span>¿Trae OBB?</span><br>
            <input type="checkbox" name="mod" value="MOD"><span>¿Es una APK MOD?</span>
            </div>
            <div class="rightAngle">
                <div class="box">
                <p style="margin-top:0px;">Categorías</p>
            <?php echo $categorias ?>
            </div>
            <div style="height:20px"></div>
                <div class="box">
                    <p>Poster</p>
                    <div id="preview"><img src="https://futbol.unsta.edu.ar/webroot/img/novedades/default.png"></div>
                    <input type="file" class="form-control-file" name="poster" size="20" id="file" accept="image/*">
                </div>
                <div style="height:20px"></div>
                <div class="box">
                    <?php
                    include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';
                    $selecU = "SELECT id FROM users WHERE username = '$_SESSION[user]'";
                    $selecUConn = $conn->query($selecU);
                    $user = mysqli_fetch_array($selecUConn);
                    ?>
                    <input type="hidden" name="user" value="<?php echo $user['id']; ?>">
                    <button>Subir</button>
                </div>
            </div>
            </div>
            </form>
    </div>
</div>
<script defer src="https://admin.lomuchachogames.com/js/show-idiomas.js"></script>
    <script>

    window.onbeforeunload = function preguntarAntesDeSalir()
    {
        return "¿Seguro que quieres salir?";
    }

                ClassicEditor
                .create( document.querySelector( '.editor' ) )
                .catch( error => {
                    console.error( error );
                    } );
                ClassicEditor
                .create( document.querySelector( '.editoren' ) )
                .catch( error => {
                    console.error( error );
                    } );
                ClassicEditor
                .create( document.querySelector( '.editorpr' ) )
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
<?php 
}
?>