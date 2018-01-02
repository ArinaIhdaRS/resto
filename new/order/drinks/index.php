<?php 
try {
	$koneksi = new PDO('mysql:host=localhost;
  dbname=restoran','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM menu WHERE kategori = "Minuman"');
//$query = $koneksi->prepare('SELECT * FROM mahasiswa WHERE nama LIKE "Gayle%"');

$query->execute();

$drink = $query->fetchAll(PDO::FETCH_OBJ);
//$mahasiswa = $query->fetch(PDO::FETCH_OBJ);
 ?>

<?php 
	$head = "ORDER";
	$heads = "DRINKS";

	require '../../_layout/header.php';
	require '../../_layout/aside.php';
	require '../../_layout/nav.php';
	require 'drink.php';
?>