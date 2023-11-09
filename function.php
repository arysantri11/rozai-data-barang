<?php
session_start();

//membuat koneksi kedatabase
$conn =mysqli_connect("localhost","root","","db_test");

//add new item
if(isset($_POST['addnewbarang'])){
    $namabarang = $_POST['namabarang'];
    $deskripsi = $_POST['deskripsi'];
    $stock = $_POST['stock'];

    $addtotable = mysqli_query($conn,"insert into stock (namabarang, deskripsi, stock) values('$namabarang','$deskripsi','$stock')");
    if($addtotable){
        header('location:index.php');
    }else{
        echo 'Gagal';
        header('location:index.php');
    }
}

if(isset($_POST['addnewbarangmasuk'])){
    $idbarang = $_POST['idbarang'];
    $tanggal = $_POST['tanggal'];
    $keterangan = $_POST['keterangan'];

    $addtotable = mysqli_query($conn,"insert into masuk (idbarang, tanggal, keterangan) values('$idbarang','$tanggal','$keterangan')");

    if($addtotable){
        header('location:masuk.php');
    }else{
        echo 'Gagal';
        header('location:masuk.php');
    }
}

if(isset($_POST['addnewbarangkeluar'])){
    $idbarang = $_POST['idbarang'];
    $tanggal = $_POST['tanggal'];
    $penerima = $_POST['penerima'];

    $addtotable = mysqli_query($conn,"insert into keluar (idbarang, tanggal, penerima) values('$idbarang','$tanggal','$penerima')");
    
    if($addtotable){
        header('location:keluar.php');
    }else{
        echo 'Gagal';
        header('location:keluar.php');
    }
}
?>