<html>
<head>
	<title>Agregar Edificio</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	
		
	// checking empty fields
	if(empty($id) ||empty($nombre)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
				
		if(empty($nombre)) {
			echo "<font color='red'>ID servicio field is empty.</font><br/>";
		}

		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO edificio(id,nombre) VALUES('$id','$nombre')");
		
		//display success message
		echo "<font color='green'>Edificio agregado de manera exitosa.";
		echo "<br/><a href='index.php'>Volver a pagina de inicio</a>";
	}
}
?>
</body>
</html>