<?php
include("config.php");

$conn = mysqli_connect('localhost:3305','root','','residencial');
require('get.php');
require('addhistorialpro.html');
require('addVisitapro.html');
$info = "SELECT * FROM propietario WHERE edificioID = '".$ed."' AND apartamentoID = '".$ap."' AND clave = '".$clave."'";
$result = mysqli_query($conn,$info);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Propietario</title>
<link rel="stylesheet" type="text/css" href="style/modal.css">
<link rel="stylesheet" type="text/css" href="style/modal.js">
<link rel="stylesheet" type="text/css" href="style/dashboard.css">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css">
	<link rel="stylesheet" type="script" href="style/bootstrap-3.3.7/js/bootstrap.js">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Residenciales villa del mar</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
<!----------
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Settings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Help</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
	  ----->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="#">Perfil general <span class="sr-only">(current)</span></a>
            </li>

          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <button id="myBtn" class="btn btn-primary btn-block">Solicitar Servicio</button>
            </li>
			<li class="nav-item">
              <button id="myBtn1"class="btn btn-primary btn-block">Registrar Visitante</button>
            </li>
          </ul>

        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">




<h2>Informacion personal</h2>
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
            <th>Codigo de propietario</th>
			<th>Nombre</th>
			<th>Cedula</th>
			<th>No. Edificio</th>
			<th>No. Apartamento</th>
			<th>PIN de acceso</th>
                </tr>
              </thead>


<?php

while($row = mysqli_fetch_array($result)){
	echo "
		<tbody><tr>
			<td>".$row[0]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[1]."</td>
			<td>".$row[5]."</td>
			<td>".$row[4]."</td>

		</tr></tbody>";
}
echo "</table></div>";

$servicio = "SELECT * FROM historialserv WHERE edificioID = '".$ed."' AND apartamentoID = '".$ap."' ";
$serv = mysqli_query($conn,$servicio);

?>

<h2>Historial de servicios particulares</h2>
	<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
			<th>#</th>
			<th>Codigo de servicio</th>
			<th>Fecha de reserva</th>
			<th>Comentario</th>
			<th>No. Edificio</th>
			<th>No. Apartamento</th>
		</tr>
              </thead>

		<?php
while($row = mysqli_fetch_array($serv)){
	echo "
		<tbody><tr>

			<td>".$row[0]."</td>
			<td>".$row[1]."</td>
			<td>".$row[2]."</td>
			<td>".$row[3]."</td>
			<td>".$row[4]."</td>
			<td>".$row[5]."</td>
			<td><a href=\"edithistorial.php?ed=$row[0]\">Editar</a> | <a href=\"deletehistorial.php?id=$row[0]\" onClick=\"return confirm('Seguro que lo quieres eliminar?')\">Eliminar</a></td>

		</tr></tbody>";
}
echo "</table></div>";


$visitas = "SELECT * FROM historialvisit WHERE edificioID = '".$ed."' AND apartamentoID = '".$ap."' ";
$visit = mysqli_query($conn,$visitas);

?>

<h2>Historial de visitas</h2>
	<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
			<th>#</th>
			<th>Cedula</th>
			<th>Nombre</th>
			<th>Motivo</th>
			<th>Fecha</th>
			<th>No. Edificio</th>
			<th>No. Apartamento</th>
		</tr>
              </thead>

		<?php
while($row = mysqli_fetch_array($visit)){
	echo "
		<tbody><tr>
			<td>".$row[0]."</td>
			<td>".$row[3]."</td>
			<td>".$row[2]."</td>
			<td>".$row[4]."</td>
			<td>".$row[6]."</td>
			<td>".$row[5]."</td>
			<td>".$row[1]."</td>
			<td><a href=\"edithistorial.php?id=$row[0]\">Editar</a> | <a href=\"deletehistorial.php?id=$row[0]\" onClick=\"return confirm('Seguro que lo quieres eliminar?')\">Eliminar</a></td>

		</tr></tbody>";
}
echo "</table></div>";

?>

 </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../../../assets/js/ie10-viewport-bug-workaround.js"></script>


<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");

var btn1 = document.getElementById("myBtn1");
var modal1 = document.getElementById('myModal1');
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
  </body>
</html>
