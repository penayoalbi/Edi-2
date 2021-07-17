<?php
//session_start();
$conex="";
	try{
		$conex=mysqli_connect('localhost','root','cr7carplove2911.','beltran');
		//echo "Se conecto a la base de datos";
	}catch(PDOException $e){
		echo "ERROR".$e->getMessage();
	}
?>