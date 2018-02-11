
<?php

include("config.php");
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM historialserv WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$ID = $res['id'];
	$servicioid = $res['servicioID'];
	$fecha = $res['fecha'];
	$comentario = $res['comentario'];
	$edificio = $res['edificioID'];
	$apartamento = $res['apartamentoID'];
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Propietario</title>
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
            <li class="nav-item">
              <a class="nav-link" href="search.php">Consultas</a>
            </li>
         
          </ul>

          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="addServicio.html">Solicitar servicio</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="addVisita.html">Registrar visitante</a>
            </li>
          </ul>

        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">
		
	<h2>Editar historial</h2>
	<form name="form1" method="post" action="edit.php">
			 
		<div class="table-responsive">
            <table class="table table-striped">
              
                <tr> 
				<thead><td>ID</td></thead>
				<tbody><td><input type="text" name="id" value="<?php echo $ID;?>"></td></tbody>
			</tr>
			<tr> 
				<thead><td>ID Servicio</td></thead>
				<tbody><td><input type="text" name="servicio" value="<?php echo $servicioid;?>"></td></tbody>
			</tr>
			
			<tr> 
				<thead><td>Fecha</td></thead>
				<tbody><td><input type="text" name="fecha" value="<?php echo $fecha;?>"></td></tbody>
			</tr>
			<tr> 
				<thead><td>Comentario</td></thead>
				<tbody><td><input type="text" name="comentario" value="<?php echo $comentario;?>"></td></tbody>
			</tr>
			<tr> 
				<thead><td>Codigo de edificio</td></thead>
				<tbody><td><input type="text" name="edificio" value="<?php echo $edificio;?>"></td></tbody>
			</tr>
			<tr> 
				<thead><td>Codigo de apartamento</td></thead>
				<tbody><td><input type="text" name="apartamento" value="<?php echo $apartamento;?>"></td></tbody>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
		
		</div>
	</form>
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