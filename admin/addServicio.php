<html>
<head>
	<title>Agregar Servicio</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$edificio = mysqli_real_escape_string($mysqli, $_POST['edificio']);
	$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);

		
	// checking empty fields
	if(empty($id) ||empty($edificio) ||empty($titulo)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
				
		if(empty($edificio)) {
			echo "<font color='red'>Edificio field is empty.</font><br/>";
		}
		
			if(empty($titulo)) {
			echo "<font color='red'>Titulo field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO servicio(id,titulo,edificioID) VALUES('$id','$titulo','$edificio')");
		
		//display success message
		echo "<font color='green'>Servicio agregado de manera exitosa.";
		echo "<br/><a href='index.php'>Volver a pagina de inicio</a>";
	}
}
?>
</body>
</html>