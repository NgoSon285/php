<?php 
	$hostname = "localhost";
	$username = "root";
	$password ="";
	$database = "viet_travel";
	$db = mysqli_connect($hostname,$username,$password,$database);
	mysqli_set_charset($db,"UTF8");
