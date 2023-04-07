<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-pc.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-pc.php';

if($_GET['type'] === 'game'){
    $action = 'https://pc.lomuchachogames.com/includes/upload?type=game';
}else{
    $action = 'https://pc.lomuchachogames.com/includes/upload?type=app';
}
?>
<div class="micha">
    <div class="michaInside">
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
            <div class="angles">
                <div class="leftAngle">
            <div class="box">
                <input type="text" name="title" placeholder="Titulo del juego">
                <input type="text" name="developer" placeholder="Desarrollador">
                <input type="text" name="donwload" placeholder="Link descargar">
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <label>Descripción</label>
                <textarea class="editor" rows="10" cols="20" name="texto"></textarea>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <input type="text" name="tags" placeholder="tags">
                <input type="text" name="size" placeholder="Tamaño en GB o MB(hay que agregar medida)">
                <input type="date" name="launch" placeholder="lanzamiento">
            </div>
            <div style="height:20px"></div>
            <div class="box cincuenta">
            <div class="dedecha">
                <p>Requisitos minimos</p>
                <input type="text" name="so" placeholder="Sistema Operativo">
                <input type="text" name="ram" placeholder="Memoria Ram">
                <input type="text" name="storage" placeholder="Alamacenamiento">
                <input type="text" name="processor" placeholder="Procesador">
                <input type="text" name="tarjeta" placeholder="Tarjeta Gráfica">
            </div>
            <div class="dedecha">
                <p>Requisitos Recomendados</p>
                <input type="text" name="soR" placeholder="Sistema Operativo">
                <input type="text" name="ramR" placeholder="Memoria Ram">
                <input type="text" name="storageR" placeholder="Alamacenamiento">
                <input type="text" name="processorR" placeholder="Procesador">
                <input type="text" name="tarjetaR" placeholder="Tarjeta Gráfica">
            </div>
            </div>
            <div style="height:20px"></div>
            <div class="box">
                <p>Categorías</p>
                           <?php
            $selectCat = "SELECT * FROM categories";
            $selectCatConn = $conn->query($selectCat);

            $host= $_SERVER["HTTP_HOST"];
            $url= $_SERVER["REQUEST_URI"];
            
            while($f = mysqli_fetch_array($selectCatConn)){
                echo "<div class='cat'><input type='checkbox' name='categories[]' value='$f[title]'><span>$f[title]</span></div>";
            }
            ?>
            </div>
            </div>
            <div class="rightAngle">
                <div class="box">
                    <p>Poster</p>
                    <input type="file" name="poster" required>
                </div>
                <div style="height:20px"></div>
                <div class="box">
                    <p>Galería</p>
                    <input type="file" id="archivo[]" name="archivo[]" multiple="" required>
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