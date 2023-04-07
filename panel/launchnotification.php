<input type="text" id="text">
<input type="button" value="Comprobar" onclick="prueba_notificacion()">
<script>
    function prueba_notificacion() {
if (Notification) {
if (Notification.permission !== "granted") {
Notification.requestPermission()
}
var title = "LOMUCHACHO"
var extra = {
icon: "https://lomuchachogames.com/fotos/LOMUCHACHOgames.png",
body: document.getElementById("text").value
}
var noti = new Notification( title, extra)
noti.onclick = {
// Al hacer click
}
noti.onclose = {
// Al cerrar
}
setTimeout( function() { noti.close() }, 10000)
}
}
</script>