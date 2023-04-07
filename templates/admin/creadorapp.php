<?php include_once $_SERVER['DOCUMENT_ROOT'].'/includes/conection.php';?>
<html>
    <head>
        <title>Crea Apps para Android - LOMUCHACHOgames</title>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximium-scale=1">

        <link rel="icon" type="image/png" href="https://lomuchachogames.com/fotos/LOMUCHACHOgames.png"/>

        <link rel="stylesheet" href="https://lomuchachogames.com/css/general.css">
        <link rel="stylesheet" href="https://lomuchachogames.com/css/bienvenido.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
         <script src="https://cdn.ckeditor.com/ckeditor5/12.3.0/classic/ckeditor.js"></script>
    </head>
<body>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/templates/admin/menu/menu.php'; ?>
<div class="dios">
        <div class="container-fluid">
            <form enctype="multipart/form-data" action="https://lomuchachogames.com/includes/subidorapp.php" method="post">
                <div class="row todo">
<div class="col-md-10">
                        <div class="parte">
                            <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> Principal </h3>
                                <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Nombre de la App</label><br>
                            <input id="nombre" class="form-control" name="nombre" placeholder="Tinder, Facebook, Instagram, ..." required></div>
                            <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Creador</label><br>
                            <input name="creador" class="form-control" type="text" placeholder="Facebook, Google, ..."></div>
                            <div class="col-md-6">
                            <label style="margin-bottom: -2px;">Version de la app</label>
                            <input name="version" class="form-control" type="text"><br>  
                        </div></div>
                        </div>
                        <div class="parte">
                            <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> LINKS </h3>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Mediafire APK Link</label><br>
                                <input name="mediafireapk" class="form-control" type="text" required><br>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Mega APK Link</label><br>
                                <input name="megaapk" class="form-control" type="text" required><br>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Mediafire OBB Link</label><br>
                                <input name="mediafireobb" class="form-control" type="text"><br>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Mega OBB Link</label><br>
                                <input name="megaobb" class="form-control" type="text"><br>
                            </div>
                            </div>
                            </div>
                            <div class="parte">
                            <div class="insides">
                                <h3 style="padding: 10px; text-decoration: none; color: white; font-weight: bold; display: inline-block; margin-top:-22px; border-right: 30px solid transparent; border-bottom: 30px solid #4c4c4c; height: 0; line-height: 50px;"> INFORMACIÓN </h3>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Tamaño del juego</label><br>
                                <input name="tamano" class="form-control" type="text" required><br>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Apto para(edad)</label><br>
                                <input name="apto" class="form-control" type="text"><br>
                            </div>
                            <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Version Android</label><br>
                                <input name="versionandroid" class="form-control" type="text"><br>

                            </div>
                            </div>
                        </div>
                        <div class="parte">
                            <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> TEXTOS </h3><br>
   
                             <label style="margin-bottom: -2px;">Descripcion</label><br>
                            				<textarea class="editor" rows="10" cols="20" name="texto"></textarea>
                            <label style="margin-bottom: -2px;">Informacion Adicional</label><br>
                            				<textarea class="edit" rows="10" cols="20" name="info"></textarea>
                        </div>
                        </div>
                         <div class="parte">
                             <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> TEXTOS PORTUGUES </h3><br>
   
                             <label style="margin-bottom: -2px;">Descripcion</label><br>
                            				<textarea class="editorpr" rows="10" cols="20" name="textopr"></textarea>
                            <label style="margin-bottom: -2px;">Informacion Adicional</label><br>
                            				<textarea class="editpr" rows="10" cols="20" name="infopr"></textarea>
                        </div>
                        </div>
                                                <div class="parte">
                                                    <div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> TEXTOS INGLES </h3><br>
   
                             <label style="margin-bottom: -2px;">Descripcion</label><br>
                            				<textarea class="editoren" rows="10" cols="20" name="textoen"></textarea>
                            <label style="margin-bottom: -2px;">Informacion Adicional</label><br>
                            				<textarea class="editen" rows="10" cols="20" name="infoen"></textarea>
                        </div>
                        </div>
                        <div class="parte"><div class="insides">
                            <h3 style="padding: 10px;
                                text-decoration: none;
                                color: white;
                                font-weight: bold;
                                display: inline-block;
                                margin-top:-22px;
                                border-right: 30px solid transparent;
                                border-bottom: 30px solid #4c4c4c; 

                                height: 0;
                                line-height: 50px;"> SEO </h3>
                            <div>
                                <div class="col-md-6">
                                <label> Titulo de la pagina Portugues</label>
                                <input name="titulopr" class="form-control" type="text" maxlength="70" autocomplete="off" required>
                                </div>
                                <div class="col-md-6">
                                <label> Descripcion de la pagina Portugues</label>
                                <input name="descripcionpr" class="form-control" type="text" maxlength="160" autocomplete="off" required></div>
                                <div class="col-md-6">
                                <label style="margin-bottom: -2px;">Keywords</label>
                                <input name="keywords" class="form-control" type="text" maxlength="160" autocomplete="off" required>
                                <div class="alert alert-info" role="alert">
                                    ¡Porfavor separa las keywords con ,(coma) y no ingrese mas de 3!
                                </div></div>
                                <input type="checkbox" name="traemod" value="Mod"><label class="custom-control-label">¿Mod APK?</label><input type="checkbox" name="traeobb" value="OBB"><label class="custom-control-label">¿Trae OBB?</label>
                            </div>
                            </div>
                        </div>
                     </div>    
                    <div class="col-md-2" id="public">
                        <div class="parte padding_dos">
                            <div class="insides">
                                <label>Categorias</label><br><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1"  name="categoria1" value="musica">
                            <label class="custom-control-label" >Musica</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="categoria2" value="comunicacion">
                            <label class="custom-control-label">Comunicacion</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="categoria3" value="citas">
                            <label class="custom-control-label" >Citas</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="categoria4" value="compras">
                            <label class="custom-control-label"  >Compras</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1"  name="categoria5" value="entretenimiento">
                            <label class="custom-control-label" >Entretenimiento</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1" name="categoria6" value="fotografia">
                            <label class="custom-control-label" >Fotografia</label><br>
                            <input type="checkbox" class="custom-control-input" id="customCheck1" value="personalizacion" name="categoria7">
                            <label class="custom-control-label">Personalizacion</label><br>
                        </div></div>
 <div class="parte padding_dos">
                            <div class="insides">
                        <div class="imga">
                            <label>Imagen Principal</label><br>
                            <div id="preview"><img src="https://futbol.unsta.edu.ar/webroot/img/novedades/default.png"></div>
                            <input type="file" class="form-control-file" name="img" size="20" id="file" accept="image/*">
                        </div>
                        </div>
                        </div>
                        <div class="parte padding_dos"><div class="imga">
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                <label id="ready" class="form-check-label" for="invalidCheck">
                                    ¿Todo Listo?
                                </label>
                                <div class="invalid-feedback">
                                    Tenes que aceptar para subir el juego.
                                </div><br>
                                <input class="gonzaloh" type="submit" value="Publicar">
                                </div></div>
                            </div>
                        </div>
                        </form>
                    </div>
				<script>
				ClassicEditor
				.create( document.querySelector( '.editor' ) )
				.catch( error => {
					console.error( error );
					} );
				ClassicEditor
				.create( document.querySelector( '.edit' ) )
				.catch( error => {
					console.error( error );
					} );
								ClassicEditor
				.create( document.querySelector( '.editorpr' ) )
				.catch( error => {
					console.error( error );
					} );
				ClassicEditor
				.create( document.querySelector( '.editpr' ) )
				.catch( error => {
					console.error( error );
					} );
						ClassicEditor
				.create( document.querySelector( '.editoren' ) )
				.catch( error => {
					console.error( error );
					} );
				ClassicEditor
				.create( document.querySelector( '.editen' ) )
				.catch( error => {
					console.error( error );
					} );
					document.getElementById("file").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
					</script>
