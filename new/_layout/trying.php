<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   $id_menu = $_POST['id_transaksi'];
   $tanggal = $_POST['tgl_transaksi'];
   $id_meja = $_POST['id_meja'];
   $total_bayar = $_POST['total_bayar'];
Alhamdulilah
try {
  $koneksi = new PDO('mysql:host=localhost;
  dbname=restoran','root','170897');
} catch (PDOException $e) {
  die($e->getMessage());
}

$query = $koneksi->prepare("INSERT INTO pembayaran
                            (id_barang, nama_barag, harga_barang, kategori_barang) VALUES
                            (:id_barang, :nama_barag, :harga_barang, :kategori_barang)
                           ");
$koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query->bindParam(':id_barang', $id_barang);
$query->bindParam(':nama_barag', $nama_barag);
$query->bindParam(':harga_barang', $harga_barang);
$query->bindParam(':kategori_barang', $kategori_barang);

try {
  $query->execute();
  header('Location: index.php');
} catch (PDOException $e) {
  if ($e->errorInfo[1] == 1062) { // 1062 adalah kode error untuk duplicate entry
     session_start();
     $_SESSION['error'] = 'Data yang anda input sudah ada.';
     header('Location: tambah.php');
   }
}