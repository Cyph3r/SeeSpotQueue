<?php 
	$server = "localhost:8889";
	$user = "root";
	$password = "root";
	$database = "SeeSpotQueue";
	$connection = mysqli_connect($server,$user,$password,$database);

	session_start();
 ?>