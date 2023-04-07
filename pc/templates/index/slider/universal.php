<div class="multipleGames">
    <p style="margin:0px;margin:5px 0px;font-size:1.5em;font-weight: bold;">Últimos Juegos</p>
    <div class="multipleGameInside">
        <?php
        $selectLast = "SELECT * FROM juegos ORDER BY juegos.id DESC LIMIT 18";
$universal = $conn->query($selectLast);
        while($fetchLast = mysqli_fetch_array($universal)){
            echo '<div class="oneGame">
            <a href="'.$fetchLast['link'].'">
            <div class="oneGameInside">
            <div class="imageGame">
                <img src="'.$fetchLast['poster'].'" alt="Portada de '.$fetchLaste['title'].'">
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