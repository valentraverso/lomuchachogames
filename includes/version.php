<div>
    <?php $get = $_GET['name'];?>
    <p>
        Unicamente tiene que poner el nombre del juego esta pagina se encargara de todo.
    </p>
    <form action method="post">
        <label>Nombre del juego</label>
        <input type="text" value="<?php echo $get?>" name='text'>
        <input type="submit">
    </form>
</div>
<?php
if(!empty($_POST['text'])){
    $nombre = $_POST['text'];
     $texto1 = str_replace(" ", "-", $nombre);
    $texto_guion = str_replace(":", "", $texto1);
 $enter = fopen("../juegos/versiones/$texto_guion.php", "x+");
    fwrite($enter, '<?php 
include_once \'../../php/conexion-database.inc.php\';
$select = "SELECT * FROM juegos WHERE nombre = \'' . $nombre. '\'";
$data = $conn->query($select);
$fila = mysqli_fetch_array($data);
$nombre = "$fila[nombre]";
$version = "$fila[version]";
$tamano = "$fila[tamano]";
$ft = "$fila[texto]";
$creador= "$fila[creador]";
$titulopagina =  "Todas las versiones de ' . $nombre . 'para Android - Descargar ' . $nombre . ' ultima version";
 include_once $_SERVER[\'DOCUMENT_ROOT\'].\'/templates/game/versiones.php\';');
    fclose($enter);
   echo '<script>window.close();</script>';
}
?>
