<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-librodia.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-librodia.php';
?>
<div class="micha">
    <div class="michaInside">
        <form action="https://librodia.com/includes/upload.php" method="post" enctype="multipart/form-data">
            <div class="angles">
                <div class="leftAngle">
            <div class="box">
                <span class="tagModify">Titulo</span>
                <input type="text" name="title" placeholder="Titulo del libro">
                <span class="tagModify">Autor</span>
                <input type="text" name="autor" placeholder="Autor">
                <div class="cincuenta">
                    <div class="dedecha">
                <span class="tagModify">Nombre de la saga</span>
                <input type="text" name="saga" placeholder="Nombre de la saga">
                </div>
                <div class="dedecha">
                <span class="tagModify">Número de la saga</span>
                <input type="text" name="num" placeholder="Número de la saga">
                </div>
                </div>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label>Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"></textarea>
            </div>
            <div style="height:20px"></div>
            <div class="box cincuenta">
                <div class="dedecha">
                    <span class="tagModify">EPUB</span>
                    <input type="text" name="epub" placeholder="Link EPUB">
                </div>
                <div class="dedecha">
                    <span class="tagModify">PDF</span>
                    <input type="text" name="pdf" placeholder="Link PDF">                 
                </div>
            </div>
            </div>
            <div class="rightAngle">
                <div class="box">
                <p>Categorías</p>
                <div class="flexin">
                           <?php
            $selectCat = "SELECT * FROM categories";
            $selectCatConn = $conn->query($selectCat);

            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
            
            while($f = mysqli_fetch_array($selectCatConn)){
                echo "<div class='cat'><input type='checkbox' name='cat[]' value='$f[title]'><span>$f[title]</span></div>";
            }
            ?>
            </div>
            <input type="text" name="cat[]" placeholder="Categoria">
            </div>
            <div style="height:20px"></div>
                <div class="box">
                    <p>Poster</p>
                    <input type="file" name="img">
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
	<script>
				ClassicEditor
				.create( document.querySelector( '.editor' ) )
				.catch( error => {
					console.error( error );
					} );
	</script>