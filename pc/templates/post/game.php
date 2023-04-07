<?php
$title = "Descargar $fetchG[title] gratis para pc - LOMUCHACHOgames PC";
$description = "Descargar $fetchG[title] gratis mediante 1 solo link para tu pc en LOMUCHACHOgames PC. Descarga tu juego favorito por Mediafire gratis rapido.";
$key = "descargar $fetchG[title], $fetchG[title], $fetchG[title] para pc, descargar $fetchG[title] 1 link gratis mediafire,";
$link = $fetchG['link'];
$id = $fetchG['id'];
include $_SERVER['DOCUMENT_ROOT'].'/templates/parts/header/general.php';
?>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/menu/menu.php';
?>
    <div class="bergen">
        <div class="bergenTitle">
            <h1>Descargar <?php print $fetchG['title']; ?> gratis</h1>
            <p><a href="#">Todos los juegos</a> > <a href="#"><?php echo $fetchG['developer'] ?></a> > <?php echo $fetchG['title'] ?></p>
        </div>
        <div class="bergenInside">
            <div class="leftSide">
                <!-- Slideshow container -->
<div class="slideshow-container">
<?php
$imgArray = explode(",", $fetchG['images']);

$i = count($imgArray);

for($f = 0; ;$f++){
    if($f == $i){
        break;
    }
 $actualImg = $f + 1;
 $actualImgLink = $imgArray[$f];
 echo '<div class="mySlides1">
    <img src="'.$actualImgLink.'" style="width:100%" alt="imagen de '.$fetchG[title].'">
  </div>';
}
?>
 
  <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
</div>
        <div class="boxBlack">
            <h2>Sobre <?php echo $fetchG['title']; ?></h2>
            <?php echo $fetchG['description']; ?>
        </div>
        <div style="height:20px;"></div>
                <div class="boxBlack">
            <p style="margin:0px;margin:5px 0px;font-size:1.5em;font-weight: bold;">Descargar Juego</p>
            <button class="btnDownload"><a href="<?php echo $fetchG['dowload'] ?>" target="_blank" rel="nofollow">Descargar</a></button>
            <span style="font-size:10px;">LOMUCHACHOgames PC respeta los derechos de propiedad intelectual de terceros, al hacer click en el botón de arriba estas infringiendo los derechos de propiedad intelectual de la empresa desarrolladora de este videojuego.</span>
        </div>
        <div style="height:20px;"></div>
        
        <div class="boxBlack">
            <p style="margin:0px;margin:5px 0px;font-size:1.5em;font-weight: bold;">Requisitos</p>
            <div class="mitimiti">
                <div class="minimos">
                    <p>Minimos</p>
                    <?php 
                    $cate = explode(",", $fetchG['minimium']);
                    if(!empty($cate[0])){
                        echo '<li><b>Sistema Operativo:</b>'.$cate[0].'</li>';
                    }
                    if(!empty($cate[1])){
                        echo '<li><b>Ram:</b>'.$cate[1].'</li>';
                    }
                    if(!empty($cate[2])){
                        echo '<li><b>Almacenamiento:</b>'.$cate[2].'</li>';
                    }
                    
                    if(!empty($cate[3])){
                        echo '<li><b>Procesador:</b>'.$cate[3].'</li>';
                    }
                    if(!empty($cate[4])){
                        echo '<li><b>Tarjeta Gráfica:</b>'.$cate[4].'</li>';
                    }
                ?>
                </div>
                <div class="Recomendados">
                    <p>Recomendados</p>
                    <?php
                     $cates = explode(",", $fetchG['recomended']);
                    if(!empty($cates[0])){
                        echo '<li><b>Sistema Operativo:</b>'.$cates[0].'</li>';
                    }
                    if(!empty($cates[1])){
                        echo '<li><b>Ram:</b>'.$cates[1].'</li>';
                    }
                    if(!empty($cates[2])){
                        echo '<li><b>Almacenamiento:</b>'.$cates[2].'</li>';
                    }
                    
                    if(!empty($cates[3])){
                        echo '<li><b>Procesador:</b>'.$cates[3].'</li>';
                    }
                    if(!empty($cates[4])){
                        echo '<li><b>Tarjeta Gráfica:</b>'.$cates[4].'</li>';
                    }
                    ?>
                </div>
            </div>
            </div>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/templates/post/game-side.php'; ?>
            <div class="boxBlack">
                <p style="margin:0px;margin:5px 0px;font-size:1.5em;font-weight: bold;">Comentarios</p>
                <form action="https://pc.lomuchachogames.com/includes/comment.php" method="post">
    <?php if ( strstr( $_SERVER["REQUEST_URI"], 'juegos' ) ) {
  $type = "juegos";
} else {
  $type = "apps";
}; ?>
    <input type="hidden" value="<?php echo $id; ?>" name="idpost">
    <input type="hidden" value="<?php echo $type; ?>" name="type">
    <input type="hidden" value="add" name="action">
    <input type="text" placeholder="Establece un apodo" name="name" maxlength="50" id="comment" required>
    <textarea type="text" name="text" placeholder="Comentario..." id="comment" maxlength="150" required></textarea>
    <button>Comentar</button>
    </form>
    </div>
    <?php
    $coments = "SELECT * FROM comments WHERE idpost = '$fetchG[id]' AND type = '$type'";
    $comentsC = $conn->query($coments);
    $cNum = mysqli_num_rows($comentsC);
    if($cNum >= 1){
        while($cF = mysqli_fetch_array($comentsC)){
            echo '<div class="oneComent">
            <div class="upperComent">
            <span>@'.$cF['name'].'</span>
            </div>
            <div class="downComent">
            <span>'.$cF['text'].'<span>
            </div>
            </div>';
        }
    }
    ?>
            </div>
            <div class="rightSide">
                <div class="posterPart">
                    <img src="<?php print $fetchG['poster']; ?>" alt="poster de <?php print $fetchG['title']; ?>">
                    <div class="boxBlack">
                        <p><b>Categorias:</b> <?php echo $fetchG['categorias']?></p>
                        <p><b>Desarrollador:</b> <?php echo $fetchG['developer']?></p>
                        <p><b>Lanzamiento:</b> <?php echo $fetchG['date']?></p>
                        <p><b>Tamaño: </b><?php echo $fetchG['size']?></p>
                    </div><div style="height:20px;"></div>
                    <?php
                    include $_SERVER['DOCUMENT_ROOT'].'/includes/script/views.php';
                    ?>
                    
<div class="boxBlack">
    <script src="https://apis.google.com/js/platform.js"></script>
<div class="g-ytsubscribe" data-channelid="UC4RdpWvZUajDre_1mf06psQ" data-layout="full" data-count="default"></div>
</div>
<div class="boxBlack sharePost">
    <p><b>Compartir</b></p>
    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $fetchG[link]; ?>" target="_blank"><i class="fab fa-facebook-square"></i></a><a href="https://twitter.com/intent/tweet?text=Descarga%20este%20juego%20en%20LOMUCHACHOgames,%20esta%20muy%20bueno!&url=<?php echo $fetchG[link]; ?>&hashtags=juegos" target="_blank"><i class="fab fa-twitter-square"></i></a><a href="https://api.whatsapp.com/send?text=Descarga%20este%20juego%20en%20LOMUCHACHOgames,%20esta%20muy%20bueno! <?php echo $fetchG[link]; ?>" target="_blank"><i class="fab fa-whatsapp-square"></i></a>
    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/templates/parts/header/footer.php';
    ?>
    <script>
var slideIndex = [1,1];
var slideId = ["mySlides1"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}</script>
</body>