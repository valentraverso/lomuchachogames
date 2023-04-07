<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-android.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-android.php';

$type= $_GET['type'];

if(isset($_GET['delete'])){
    ?>
    <div class="deleteConfirmation">
        <div class="deleteConfirmatioInside">
        <span class="areYouSure">¿Estas seguro de borrar <?php echo $_GET['name']; ?>?</span><br>
        <a href="https://lomuchachogames.com/includes/actions/delete?type=<?php echo $type ?>&id=<?php echo $_GET['id'] ?>&name<?php echo $_GET['name'] ?>"><button class="btnSuccess">Aceptar</button></a><a href="https://admin.lomuchachogames.com/android/games?type=<?php echo $type ?>"><button class="btnDelete">Cancerlar</button></a>
        </div>
    </div>
    <?php
}else if(isset($GET['error'])){
    switch($errror){
        case 1:
            echo '<div class="successBox" style="background:red;">
                    <p>¡Error!Este juego ya fue subido.<span class="closeBox"><a href="https://admin.lomuchachogames.com/android/games?type='.$type.'">X</a></span></p>
                </div>';
            break;
    }
}
?>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
        <form action="" method="get">
            <input type="hidden" name="type" value="<?php echo $type ?>">
            <input type="text" name="search" placeholder="Busca <?php echo $type ?>...">
            <?php
            if(isset($_GET['search'])){
                ?>
                <p class="termSearchInput"><?php echo $_GET['search'];?>  <a href="https://admin.lomuchachogames.com//android/games?type=<?php echo $type ?>">X</a></p>
                <?php
            }
            ?>
        </form>
        <?php
        //Cambia la cantidad de elementos mostrados por pagina
        $pages = $_GET['page'];
        $pageplusone = $pages+1;
        $page = $pageplusone*25;
        $page = $page - 25;
        
        $getGames = "SELECT * FROM $type";
        $getGamesC = $conn->query($getGames);
        
        $numRows = mysqli_num_rows($getGamesC);
        $numberOfPages = floor($numRows/25);
        
        //Buscador 
        $search = $_GET['search'];
        if(isset($search)){
        $option = "WHERE nombre LIKE '%".$_GET['search']."%' OR relatedWords LIKE '%".$_GET['search']."%'";
        }else{
        $option = "ORDER BY id DESC LIMIT $page, 25";
        }
        
        $getGames = "SELECT * FROM $type $option";
        $getGamesC = $conn->query($getGames);
         
        $getGamenum = mysqli_num_rows($getGamesC);
        
        if($getGamenum == 0){
            echo '<h2>ARA San Juan. No obtuvimos resultados de la busqueda.</h2>';
        }
        
        include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection.php';
        while($t = mysqli_fetch_array($getGamesC)){
    $getUploader = "SELECT * FROM users WHERE id = '$t[uploader]'";
    $getUploaderConn = $conn->query($getUploader);
    $u = mysqli_fetch_array($getUploaderConn);
    
        echo '<div class="outerGame">
       <div class="agame">
          <div class="imgGame">
           <img src="'.$t['texto'].'">
          </div>
          <div class="fucker fuckerAndroid">
              <a href="'.$t['link'].'" target="_blank">
              <p>'.$t['nombre'].'</p>
              <span>'.$t['creador'].'</span><br>
              <span>'.$t['tamano'].'</span><br>
              <span>'.$t['version'].'</span>
              </a>
          </div>
          <div class="fuckerUploader">
          <p>'.$u['username'].'</p>
          <span>ID: '.$t['id'].'</span><br>
          <span>'.$t['fecha'].'</span>
          </div>
          <div class="option">
              <button class="btn btnEdit"><a href="https://admin.lomuchachogames.com/android/edit?id='.$t['id'].'&type='.$type.'">Editar</a></button><br>
              <button class="btn btnDelete"><a href="https://admin.lomuchachogames.com/android/games?type='.$type.'&delete=1&id='.$t['id'].'&name='.$t['nombre'].'">Borrar</a></button>
          </div>
          </div>
      </div>';
        }
        if(empty($search)){
                for($i = 0;$i <= $numberOfPages;$i++){
            echo '<span class="pagination"><a href="https://admin.lomuchachogames.com/android/games?type='.$type.'&page='.$i.'">'.$i.'</a></span>';
        }
        }
        ?>
        <br>
</div>
</div>
</div>