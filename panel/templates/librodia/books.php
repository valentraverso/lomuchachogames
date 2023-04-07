<?php
include $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-librodia.php';
include $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-librodia.php';
?>

<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
        <form action="" method="get">
            <input type="text" name="search" placeholder="Busca libros...">
            <?php
            if(isset($_GET['search'])){
                ?>
                <p class="termSearchInput"><?php echo $_GET['search'];?>  <a href="https://admin.lomuchachogames.com/librodia/books">X</a></p>
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
        
        $getGames = "SELECT * FROM book";
        $getGamesC = $conn->query($getGames);
        
        $numRows = mysqli_num_rows($getGamesC);
        $numberOfPages = floor($numRows/25);
        
        //Buscador 
        $search = $_GET['search'];
        if(isset($search)){
        $option = "WHERE title LIKE '%".$_GET['search']."%'";
        }else{
        $option = "ORDER BY id DESC LIMIT $page, 25";
        }
        
        $getGames = "SELECT * FROM book $option";
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
           <img src="'.$t['img'].'">
          </div>
          <div class="fucker fuckerAndroid">
              <a href="'.$t['link'].'" target="_blank">
              <p>'.$t['title'].'</p>
              <span>'.$t['autor'].'</span><br>
              <span>'.$t['tamano'].'</span><br>
              <span>'.$t['saga'].'</span>
              </a>
          </div>
          <div class="fuckerUploader">
          <p>'.$u['username'].'</p>
          <span>ID: '.$t['id'].'</span><br>
          <span>'.$t['fecha'].'</span>
          </div>
          <div class="option">
              <button class="btn btnEdit"><a href="https://admin.lomuchachogames.com/librodia/edit?id='.$t['id'].'">Editar</a></button><br>
              <button class="btn btnDelete"><a href="https://admin.lomuchachogames.com/librodia/games?delete=1&id='.$t['id'].'&name='.$t['nombre'].'">Borrar</a></button>
          </div>
          </div>
      </div>';
        }
        if(empty($search)){
                for($i = 0;$i <= $numberOfPages;$i++){
            echo '<span class="pagination"><a href="https://admin.lomuchachogames.com/librodia/books?page='.$i.'">'.$i.'</a></span>';
        }
        }
        ?>
        <br>
</div>
</div>
</div>