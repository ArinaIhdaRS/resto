<?php
	/*try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=restoran','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT nama FROM menu');
$query->execute();

$nama = $query->fetchAll(PDO::FETCH_OBJ);
*/
?>
<?php 
	$head = "ORDER";
	$heads = "FOODS";

	require '../../_layout/header.php';
	require '../../_layout/aside.php';
	require '../../_layout/nav.php';
	require 'food.php';
?>