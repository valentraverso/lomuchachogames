<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-lateral-pc.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection-pc.php';
?>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
<?php
$takeGames = "SELECT * FROM juegos ORDER BY id DESC";
$takeGamesConn = $conn->query($takeGames);

while($t = mysqli_fetch_array($takeGamesConn)){
    include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection.php';
    $getUploader = "SELECT * FROM users WHERE id = '$t[uploader]'";
    $getUploaderConn = $conn->query($getUploader);
    $u = mysqli_fetch_array($getUploaderConn);
    
    $uploader = $u['username'];
    
    echo '<div class="outerGame">
       <div class="agame">
          <div class="imgGame">
           <img src="'.$t['poster'].'">
          </div>
          <div class="fucker">
              <a href="'.$t['link'].'" target="_blank">
              <p>'.$t['title'].'</p>
              <span>'.$t['developer'].'</span><br>
              <span>'.$t['size'].'</span>
              </a>
          </div>
          <div class="fuckerUploader">
          <p>'.$uploader.'</p>
          </div>
          <div class="option">
              <button class="btn btnEdit"><a href="https://admin.lomuchachogames.com/pc/edit?id='.$t['id'].'&type=juegos">Editar</a></button><br>
              <button class="btn btnDelete"><a href="#">Borrar</a></button>
          </div>
          </div>
      </div>';
}
?>
    </div>
</div>
</body>