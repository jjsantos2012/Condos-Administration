<?php
//including the database connection file
include_once("config.php");
$conn = mysqli_connect('localhost:3305','root','','residencial');
$result = mysqli_query($mysqli, "SELECT * FROM historialserv ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Administrador</title>
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

    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="admin.php">Resumen general </a>
            </li>


          </ul>

          <ul class="nav nav-pills flex-column">
          <li class="nav-item">
              <a class="nav-link" href="addPropietario.html">Agregar propietario </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addEdificio.html">Agregar edificio </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addApartamento.html">Agregar apartamento</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addServicio.html">Agregar servicio</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="addVisita.html">Agregar visitante <span class="sr-only">(current)</span></a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="addBalance.html">Actualizar balance</a>
            </li>
			  </li>
				<li class="nav-item">
              <a class="nav-link" href="updateservicioc.html">Actualizar servicio comun</a>
            </li>
          </ul>

        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
		<!---
		<form action="/hms/accommodations" method="GET">
		<div class="input-group pull-right">
		<input type="text" class="form-control" placeholder="Search" id="txtSearch"/>

		<label for="sel1">Select list:</label>
			<select class="form-control" id="sel1">
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			</select>

        <button class="btn btn-primary" type="submit">

        </button>


		</div>
		</form>
          ----->
		 <h1>Historial de solicitudes de servicios</h1>
		<div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>ID Servicio</th>
                  <th>Fecha</th>
                  <th>Comentario</th>
                  <th>Edificio</th>
				  <th>Apartamento</th>
                </tr>
              </thead>


	<?php
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array
	while($res = mysqli_fetch_array($result)) {
		echo "<tbody><tr>";
		echo "<td>".$res['id']."</td>";
		echo "<td>".$res['servicioID']."</td>";
		echo "<td>".$res['fecha']."</td>";
		echo "<td>".$res['comentario']."</td>";
		echo "<td>".$res['edificioID']."</td>";
		echo "<td>".$res['apartamentoID']."</td>";
		echo "<td><a href=\"edithistorial.php?id=$res[id]\">Editar</a> | <a href=\"deletehistorial.php?id=$res[id]\" onClick=\"return confirm('Seguro que lo quieres eliminar?')\">Eliminar</a></td>";
		echo "</tr> </tbody>";


	}
	?>
	</table>

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
  </body>
</html>
