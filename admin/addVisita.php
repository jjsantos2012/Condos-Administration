<html>
<head>
	<title>Agregar Visitante</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$edificio = mysqli_real_escape_string($mysqli, $_POST['edificio']);
	$apartamento = mysqli_real_escape_string($mysqli, $_POST['apartamento']);
	$nombre = mysqli_real_escape_string($mysqli, $_POST['nombre']);
	$cedula = mysqli_real_escape_string($mysqli, $_POST['cedula']);
	$motivo = mysqli_real_escape_string($mysqli, $_POST['motivo']);
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fecha']);	
	// checking empty fields
	if(empty($id) ||empty($edificio) ||empty($apartamento) ||empty($nombre) ||empty($cedula) ||empty($clave)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID esta vacio.</font><br/>";
		}
				
		if(empty($edificio)) {
			echo "<font color='red'>Codigo de edificio esta vacio.</font><br/>";
		}
		
		if(empty($apartamento)) {
			echo "<font color='red'>Codigo de apartamento esta vacio.</font><br/>";
		}
				
		if(empty($nombre)) {
			echo "<font color='red'>Nombre esta vacio.</font><br/>";
		}
		if(empty($cedula)) {
			echo "<font color='red'>Cedula esta vacio.</font><br/>";
		}
				
		if(empty($motivo)) {
			echo "<font color='red'>Motivo de visita esta vacio.</font><br/>";
		}

		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO historialvisit(id,apartamentoID,nombre,cedula,motivo,edificioID,fecha) VALUES('$id','$apartamento','$nombre','$cedula','$motivo','$edificio','$fecha')");
		
		//display success message
		echo "<font color='green'>Registro de visita agregado de manera exitosa.";
		echo "<br/><a href='index.php'>Volver a pagina de inicio</a>";
	}
}
?>
</body>
</html>