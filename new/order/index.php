<?php 
	$head = "ORDER";
	$heads = "DRINKS";

	require '../_layout/header.php';
	require '../_layout/aside.php';
	//require '../database.php';		
?>
<?php 

error_reporting(0);
//Setting session start
session_start();

$total=0;

//Database connection, replace with your connection string.. Used PDO
$conn = new PDO("mysql:host=localhost;dbname=restoran", 'root', '170897');		
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


//get action string
$action = isset($_GET['action'])?$_GET['action']:"";

//Add to cart
if($action=='addcart' && $_SERVER['REQUEST_METHOD']=='POST') {
	
	//Finding the product by code
	$query = "SELECT * FROM menu WHERE id_menu = :id_menu";
	$stmt = $conn->prepare($query);
	$stmt->bindParam('id_menu', $_POST['id_menu']);
	$stmt->execute();
	$menu = $stmt->fetch();
	
	$currentQty = $_SESSION['menu'][$_POST['id_menu']]['qty']+1; //Incrementing the product qty in cart
	$_SESSION['menu'][$_POST['id_menu']] =array('qty'=>$currentQty,'nama'=>$menu['nama'],'gambar'=>$menu['gambar'],'harga'=>$menu['harga']);
	$menu='';
	header("Location:index.php");
}

//Empty All
if($action=='emptyall') {
	$_SESSION['menu'] =array();
	header("Location:index.php");	
}

//Empty one by one
if($action=='empty') {
	$id = $_GET['id_menu'];
	$products = $_SESSION['menu'];
	unset($products[$id]);
	$_SESSION['menu']= $products;
	header("Location:index.php");	
}
	 

?>


<?php
	$head = "ORDERS";
	
	require '../_layout/nav.php';
	require '../_layout/order.php';
?>