<html>
<head>
	<title>Agregar historial de serivio</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");
if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$servicioid = mysqli_real_escape_string($mysqli, $_POST['servicioID']);
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);
	$comentario = mysqli_real_escape_string($mysqli, $_POST['comentario']);
	$edificio = mysqli_real_escape_string($mysqli, $_POST['edificioID']);
	$apartamento = mysqli_real_escape_string($mysqli, $_POST['apartamentoID']);
		
	// checking empty fields
	if(empty($id) ||empty($servicioid) || empty($fecha) || empty($comentario)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
				
		if(empty($servicioid)) {
			echo "<font color='red'>ID servicio field is empty.</font><br/>";
		}	
		
		if(empty($fecha)) {
			echo "<font color='red'>Fecha field is empty.</font><br/>";
		}
		
		if(empty($comentario)) {
			echo "<font color='red'>Comentario field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO historialserv(id,servicioID,fecha,comentario,edificioID,apartamentoID) VALUES('$id','$servicioid','$fecha','$comentario','$edificio','$apartamento')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
