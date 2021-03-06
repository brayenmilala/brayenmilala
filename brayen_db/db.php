<?php
	$hostname = 'localhost';
	$username =	'root';
	$password = '';
	$dbname	  = 'brayen_db';

	$conn = mysqli_connect($hostname,$username,$password,$dbname) or die ('Gagal terhubung')
?>