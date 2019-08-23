<!DOCTYPE html>
<html><head>
    <meta charset="utf-8">
    <link rel="icon" type="image/jpg" href="estilos/logo.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="estilos/estiloProy.css" rel="stylesheet" type="text/css">
	<?php
	// Cargamos el archivo que tiene la conexión con la base de datos
	require_once('gest/conexion.php');
	// Cargamos también el archivo de funciones. De momento sólo con el menú principal.
	require_once('gest/turafunciones.inc');
	?>
  </head><body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <h4>
             <a href="https://europass.cedefop.europa.eu/es/documents/curriculum-vitae/templates-instructions" target="_blank">
             <img src="estilos/europass.png" width="100" /> Plantilla de CV Europeo.</a> 
          </h4>                 
          <!-- ----------------------------- -->
          
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
		  <?php
		  // CARGA EL MENÚ PRINCIPAL DE LA APLICACIÓN RECOGIDO EN turafunciones.inc
			principal();
		  ?>
          
        </div>
      </div>
    </div>
    <div class="section section-primary">
      <div class="container">
        <div class="row" id="notificacion">
        </div>
      </div>
    </div>