<?php 
	$server = "localhost";
	$user = "root";
	$password = "huckfin12";
	$database = "SeeSpotQueue";
	$connection = mysqli_connect($server,$user,$password,$database);

	$refresh_rate = 15000;

	session_start();
 ?>