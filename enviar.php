<?php
function Filtro($texto) {
  return htmlspecialchars(trim($texto), ENT_QUOTES);
}

// Variables
$directorio = 'C:/wamp/www/FormularioPHP/assets/';
//$extension = explode('.', $_FILES['foto']['name']);
//$nombre_foto = time() . '.' . $extension[1];
//$foto_subida = $directorio . basename($nombre_foto);
$enviado = isset($_POST['enviado']) ? (int) $_POST['enviado'] : 0;
$contenido = isset($_POST['contenido']) ? (int) $_POST['contenido'] : 0;
$nombre = isset($_POST['nombre']) ? Filtro($_POST['nombre']) : '';
$apellido = isset($_POST['apellido']) ? Filtro($_POST['apellido']) : '';
$fecha = isset($_POST['fecha']) ? Filtro($_POST['fecha']) : '';
$sexo = isset($_POST['sexo']) ? Filtro($_POST['sexo']) : '';
$region = isset($_POST['region']) ? Filtro($_POST['region']) : 0;
$area1 = isset($_POST['area1']) ? Filtro($_POST['area1']) : '';
$area2 = isset($_POST['area2']) ? Filtro($_POST['area2']) : '';
$area3 = isset($_POST['area3']) ? Filtro($_POST['area3']) : '';
$area4 = isset($_POST['area4']) ? Filtro($_POST['area4']) : '';
$pagina = isset($_POST['pagina']) ? Filtro($_POST['pagina']) : '';
$correo = isset($_POST['correo']) ? Filtro($_POST['correo']) : '';
$color = isset($_POST['color']) ? Filtro($_POST['color']) : '';
$error = '';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
  
  <title>Formulario enviado</title>
  <!-- CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">
    <link href="css/new style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
  <span style="padding-top: 10px;"></span>
<?php


// Vista de error
if(!empty($error)) {
?>
<div class="alert alert-info">
  <i class="glyphicon glyphicon-info-sign"></i>
  <?php echo $error; ?>
</div>
<a href="./" class="btn btn-warning">
  <i class="glyphicon glyphicon-chevron-left"></i>
  Volver
</a>
<?php
// Vista de éxito
} else {
  // Subir imagen

?>
  <h3>¡Formulario enviado satisfactoriamente!</h3>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Datos enviados</h3>
    </div>
    <div class="panel-body">
      	<p>Muchas Gracias<b> <?php echo $nombre; echo " ";echo $apellido?></b></p>
      	<p>La siguiente información ha sido registrada:<p>
      	<p>Fecha de nacimiento: <b><?php echo $fecha; ?></b></p>
		<p>Sexo: <b><?php echo ($sexo == 'm' ? 'Masculino' : 'Femenino'); ?></b></p>
		<p>Region: <b><?php echo $region; ?></b></p>
		<p>Areas de interes: <b><?php echo $area1; echo " ";echo $area2;echo " "; echo $area3;echo " "; echo $area4?></b></p>
		<p>Pagina personal: <b><?php echo $pagina; ?></b></p>
      	<p>Tu correo electrónico es: <b><?php echo $correo; ?></b></p>
      	<p>Color favorito: <b><?php echo $color; ?></b></p>
    </div>
    <div class="panel-footer">
      <div class="text-right">
        <a href="./" class="btn btn-primary">
          <i class="glyphicon glyphicon-chevron-left"></i>
          Volver
        </a>
      </div>
    </div>
  </div>
<?php } ?>
</div>
</body>
</html>