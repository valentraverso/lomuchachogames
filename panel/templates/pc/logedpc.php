<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-pc.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection-pc.php';
?>
<div style="height:10px;"></div>
<div class="twoColsHome">
    <div class="box boxMargin">
        <span class="spanTitleReport">Último Comentarios</span>
        <div class="reportList">
        <div class="reportListHeader">
            <ul>
            <li><b>Nombre</b></li>
            <li><b>Texto</b></li>
            <li><b><?php
if (empty($_GET['reportdate'])) {
    echo '<a href="https://admin.lomuchachogames.com/android/?reportdate=asc" id="canvas">Juego ⬇</a>';
    $reportOrder = "ORDER BY id DESC";
} else if ($_GET['reportdate'] == 'asc') {
    echo '<a href="https://admin.lomuchachogames.com/android/" id="canvas">Juego ⬆</a>';
    $reportOrder = "ORDER BY id ASC";
}
?></b><span class="orderCanvas" id="showedCanvas">Ordena fecha de mas reciente a mas antigua o de mas antigua a más reciente.</span></li>
            <li><b>Opciones</b></li>
            </ul>
        </div>
        <div class="reportListBody">
        <?php
$report     = "SELECT * FROM comments $reportOrder";
$reportConn = $conn->query($report);

while ($rFetch = mysqli_fetch_array($reportConn)) {
?>

  <ul>
    <li><?php
    echo $rFetch['name'];
?></li>
    <li><?php
    echo $rFetch['text'];
?></li>
    <li><?php
    echo $rFetch['type'];
?></li>
    <li><button>
        <a href="https://pc.lomuchachogames.com/includes/comment?idcomment=<?php echo $rFetch['id'];?>">Borrar</a>
        </button>
        </li>
        </td>
  </ul>
            
            <?php
}
?>
      </div>
        </div>
    </div>
    </div>
