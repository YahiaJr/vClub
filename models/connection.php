<?php

	$host = 'localhost';
	$db_name = 'club';
	$user = 'root';
	$pass = '';

	$conn = mysqli_connect($host  , $user , $pass, $db_name) or die("error connection");
	mysqli_set_charset($conn,"utf8");
