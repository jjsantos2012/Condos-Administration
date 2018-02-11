<?php
include("config.php");
$conn = mysqli_connect('localhost:3307','root','','residencial');

$ed = $_GET['edificio'];
$ap = $_GET['apartamento'];
$clave = $_GET['pin'];

if ($ed=="admin" and $ap == "admin" and $clave == "admin"){
	
	header ("Location:admin/admin.php");
}
	else{

	header ("Location:user/propietarioProfile.php?edificio=$ed&apartamento=$ap&pin=$clave");
	
	}
	
?>