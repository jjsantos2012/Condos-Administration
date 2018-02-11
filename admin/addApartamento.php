<html>
<head>
	<title>Agregar Apartamento</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$edificio = mysqli_real_escape_string($mysqli, $_POST['edificio']);
	
		
	// checking empty fields
	if(empty($id) ||empty($edificio)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID esta vacio.</font><br/>";
		}
				
		if(empty($edificio)) {
			echo "<font color='red'>Codigo de edificio esta vacio.</font><br/>";
		}

		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO apartamento(id,edificioID) VALUES('$id','$edificio')");
		
		//display success message
		echo "<font color='green'>Apartamento agregado de manera exitosa.";
		echo "<br/><a href='index.php'>Volver a pagina de inicio</a>";
	}
}
?>


</body>
</html>