<?php
$catList = explode(',', $fetchG['categorias']);

$sameCat = "SELECT * FROM juegos WHERE categorias LIKE '%$catList[0]%' ORDER BY RAND() LIMIT 3";
$sameCatC = $conn->query($sameCat);
?>
<div class="boxBlack">
    <p style="margin:0px;margin:5px 0px;font-size:1.5em;font-weight: bold;">Tambien te puede gustar...</p>
    <div class="fourGames">
<?php
while($fetchLast = mysqli_fetch_array($sameCatC)){
            echo '<div class="oneGame">
            <a href="'.$fetchLast['link'].'">
            <div class="oneGameInside">
            <div class="imageGame">
                <img src="'.$fetchLast['poster'].'" alt="Descargar '.$fetchLast['title'].' gratis para pc">
            </div>
            <div class="infoGame">
                <p>'.$fetchLast['title'].'</p>
            </div>
            </div>
            </a>
        </div>';
}
?>
</div>
</div>