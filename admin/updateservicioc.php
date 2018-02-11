<?php
//including the database connection file
include_once("config.php");

if(isset($_GET['Submit'])) {	
	$id =$_GET['id'];
	$titulo =$_GET['titulo'];
	$edificio =$_GET['edificioID'];
	$fecha = $_GET['fecha'];
	$estado = $_GET['estado'];
		
	// checking empty fields
	if(empty($id) ||empty($servicioid) || empty($fecha)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}
				
		if(empty($servicioid)) {
			echo "<font color='red'>ID servicio field is empty.</font><br/>";
		}
	
		
		if(empty($fecha)) {
			echo "<font color='red'>Fecha field is empty.</font><br/>";
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO serviciocomun(id,titulo,edificioID,fechaprogramada,estado) VALUES('$id','$titulo','$edificio','$fecha','$estado')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
}
?>