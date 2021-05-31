<?php
session_start();
$conn = mysqli_connect("localhost","root","","stockbarang");

//add new stuff
if(isset($_POST['addnewbarang'])) {
    $kategori = $_POST['kategori'];
    $namabarang = $_POST['nama_barang'];
    $hargabarang = $_POST['harga'];
    $jumlahbarang = $_POST['jumlah'];


   $addtotable = mysqli_query($conn,"insert into stock (kategori, nama_barang, harga, jumlah) values('$kategori' ,'$namabarang','$hargabarang','$jumlahbarang')");
   if($addtotable) {
       header('location:index.blade.php');
   } else {
       echo 'Failure';
       header('location:index.blade.php');
   }
 }
?>