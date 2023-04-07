<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header/v1.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-lateral-home.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/menu/menu-up.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/includes/conection.php';
?>
<div style="height:20px;"></div>
<div class="micha">
    <div class="michaInside">
        <div class="rightAngle">
            <div class="box">
                <span class="spanTitleReport"><i class="fas fa-paragraph"></i>  Frase</span>
                <div class="phraseSpace">
                <?php
$arrX = ["Lindo dia para programar", " es la persona mas linda del mundo","LOMUCHACHOgames lugar de buena gente", "La CLAVE no es ser el mejor, sino tener el mejor equipo", "Si no hace estupideces cunado eres joven, no vas a tener porque reir cuando seas viejo", "El diablo susurro en mi oido: \"No eres los suficientemente fuerte para resistir la tormenta\". Hoy le susurre al diablo \"Yo soy la tormenta\"", "Apunta a la luna si fallas daras en una estrella", "Recorda siempre porque empezamos a hacer lo que hacemos y como terminaremos si somos los mejores en lo que hacemos.", "Dame 6 horas para cortar un arbol y pasare las primeras 4 afilando el hacha. Abraham Lincoln", "\"Voy a volar\" dijo el gusano. Todos se rieron menos la mariposa.", "Mi riqueza es vivir por siempre", "No siempre necesitas un plan. A veces solo necesitas huevos.", "Puedes tener mas talento que yo, podras ser mas inteligente que yo, pero si ambos subimos a una cinta de correr, solo hay dos opciones: o tu te bajas primero o yo voy a morir en la cinta.", "Despierta antes de que tu despertador suene, cuando lo haga dile: \"Eres muy lento para mi\"", "Mientras alguna personas vinieron al mundo a llorar, otras vinimos a vender pañuelos.", "No se cual es la receta para el exito, pero huevos seguro lleva.", "Habitos viejos no daran nuevos resultados.", "Me cerraron tantas puertas que no me quedo mas opcion que trabajar para comprar el edificio.", "O millonario o nada", "Vistete bien tienes una cita con el exito.", "El tiempo es dinero y el dinero mueve al mundo.", "Dos titanes siempre crean algo grande.", "Si sueñas con ganarme, será mejor que despiertes y pidas perdón. - Muhammad Ali", "Si no puedes alimentar a un equipo con dos pizzas, es demasiado grande. - Jeff Bezos", "El veneno más peligroso es el sentimiento de logro. El antídoto es pensar cada noche qué se puede hacer mejor mañana. - Ingvar Kamprad", "Un banco es un lugar que te presta dinero si puedes probar que no lo necesitas. - Bob Hope", "En los negocios prácticos de la vida, no es la fe la que salva, sino la desconfianza. - Napoleon Bonaparte", "Si te disculpas una vez, lo harás una y otra vez. Es como quitarle ladrillos a la pared de tu jodida casa. - Thomas Shelby", "Le acabo de meter un balazo en la cabeza… Me estaba mirando de la manera incorrecta. – Thomas Shelby", "Plata y miedo nunca tuve.", "Caminando en linea recta no puede uno llegar muy lejos.", "Hay dos cosas infinitas: La estupides humana y el universo; aun así, no estoy seguro de la segunda."];
$randIndex = array_rand($arrX);
echo '"'.$arrX[$randIndex].'"';
?>
            </div>
            </div>
            <div style="height:20px"></div>
    <div class="box">
        <span class="spanTitleReport"><i class="fa fa-exclamation"></i>  Novedades</span>
        <div class="newsList">
        <div class="newsListHeader">
            <ul>
            <li><b><?php if(empty($_GET['reportdate'])){
            echo '<a href="https://admin.lomuchachogames.com/?reportdate=asc" id="canvas">Fecha ⬇</a>';
            $reportOrder = "ORDER BY id DESC";
            }else if($_GET['reportdate'] == 'asc'){
            echo '<a href="https://admin.lomuchachogames.com/" id="canvas">Fecha ⬆</a>';
            $reportOrder = "ORDER BY id ASC";
            } ?></b><span class="orderCanvas" id="showedCanvas">Ordena fecha de mas reciente a mas antigua o de mas antigua a más reciente.</span></li>
            <li><b>Descripción</b></li>
            </ul>
        </div>
        <div class="newsListBody">
        <?php
$report     = "SELECT * FROM news $reportOrder";
$reportConn = $conn->query($report);        
        
while ($gFetch = mysqli_fetch_array($reportConn)) {
?>

  <ul>
    <li><?php
    echo $gFetch['date'];
?></li>
    <li><?php
    echo $gFetch['description'];
?></li>
  </td>
  </ul>
            
            <?php
}
?>
       </div>
        </div>
    </div>
</div>
</div>
</div>
		<script>
		window.onload=function()
		{
			var elemento=document.getElementById("canvas");
			elemento.onmouseover = function(e) {
			    document.getElementById("showedCanvas").style="display:block;";
			};
			elemento.onmouseout = function(e) {
				document.getElementById("showedCanvas").style="display:none;";
			};
		}
		</script>