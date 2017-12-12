<?php
	try {
  		$koneksi = new PDO('mysql:host=localhost; dbname=restoran','root','170897');
	} catch (PDOException $e) {
  		die($e->getMessage());
	}
?>
<?php

	$head = "Welcome";
	 
	require '_layout/header.php';
	require '_layout/aside.php';
	require '_layout/welcome.php';
?>