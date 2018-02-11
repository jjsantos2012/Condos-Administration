<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$edificio = mysqli_real_escape_string($mysqli, $_POST['edificioID']);
	$apartamento = mysqli_real_escape_string($mysqli, $_POST['apartamentoID']);
	$balance = mysqli_real_escape_string($mysqli, $_POST['balance']);
	$fecha = mysqli_real_escape_string($mysqli, $_POST['fechaactua']);

		
	// checking empty fields
	if(empty($id) || empty($edificio) || empty($apartamento) || empty($balance) || empty($fecha)) {
		
		if(empty($id)) {
			echo "<font color='red'>ID field is empty.</font><br/>";
		}	

	if(empty($edificio)) {
			echo "<font color='red'>edificio field is empty.</font><br/>";
		}	
	if(empty($apartamento)) {
			echo "<font color='red'>apartamento field is empty.</font><br/>";
		}			
		
			if(empty($balance)) {
			echo "<font color='red'>balance field is empty.</font><br/>";
		}	
		
		if(empty($fecha)) {
			echo "<font color='red'>Fecha field is empty.</font><br/>";
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO balance(id,edificioID,apartamentoID,Balance,fechaactua) VALUES('$id','$edificio','$apartamento','$balance','$fechaactua')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='admin.php'>View Result</a>";
	}
}
}
?>