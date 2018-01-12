<?php
 $database = 'restoran'; //nama database
 $user = 'root'; //nama user db
 $pass = '170897'; //pass db
 $host = 'localhost'; //host db, sesuaikan dengan settingan di komputer masing2.

 $conn = mysqli_connect($host,$user,$pass,$database);

 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }

 $id = $_GET['id_menu'];
 $sql = "select kategori from menu where id_menu ='".$id."'";
 $result = mysqli_query($conn,$sql); 
 
while($row=mysqli_fetch_assoc($result)){
  $

  $Photo=$row['Photo'];
  $Title=$row['Title']; 
  $Author=$row['Author'];
  $Publisher=$row['Publisher'];
  $Tahun_terbit=$row['Tahun_terbit'];
  $ISBN=$row['ISBN'];
  $Total_page=$row['Total_page'];
  $Location=$row['Location'];
  $Type=$row['Type'];
  $Jumlah_copy=$row['Jumlah_copy'];
  $Status=$row['Status'];
  
 }
?>
<?
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=restoran','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare('SELECT * FROM menu WHERE kategori = "Makanan"');
//$query = $koneksi->prepare('SELECT * FROM mahasiswa WHERE nama LIKE "Gayle%"');
//$id = $_GET['Book_id'];
//$sql = "select * from book where Book_id='".$id."'";
//$result = mysqli_query($conn,$sql); 

$query->execute();

$food = $query->fetchAll(PDO::FETCH_OBJ);
//$mahasiswa = $query->fetch(PDO::FETCH_OBJ);

?>
					<!-- Modal -->
  							<div class="modal fade" id="modaldetail" role="dialog">
    							<div class="modal-dialog modal-sm" style="width:40%">

      								<div class="modal-content">
        								<div class="modal-header">
          									<button type="button" class="close" data-dismiss="modal">&times;</button>
          									<h3 class="modal-title"><?= $menu->nama ?></h3>
        								</div>
        								<div class="modal-body">
        									<img src="../../img/<?= $menu->gambar ?>" style="width:100%">
          									<p> ........... </p>
        								</div>
        								<div class="modal-footer">
        									<p><a href="#" class="btn btn-primary btn-outline">Pesan</a></p>
          									<!--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        								--></div>
      								</div>
  
      							</div>
  							</div>
  						<!--Modal-->