<?php
include("config.php");

$conn = mysqli_connect('localhost:3307','root','','residencial');

$ed = $_GET['edificio'];
$ap = $_GET['apartamento'];
$clave = $_GET['pin'];


$info = "SELECT * FROM propietario WHERE edificioID = '".$ed."' AND apartamentoID = '".$ap."' AND clave = '".$clave."'";
$result = mysqli_query($conn,$info);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Admininistrador</title>
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
              <a class="nav-link" href="addhistorialpro.html">Solicitar servicio</a>
            </li>
			<li class="nav-item">
              <a class="nav-link" href="addVisitapro.html">Registrar visitante</a>
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
  </body>
</html>