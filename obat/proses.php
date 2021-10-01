<?php
include '../database.php';
$obat = new Obat();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $no = $_POST['no'];
    $jenis = $_POST['jenis'];
    $bentuk = $_POST['bentuk'];
    $harga = $_POST['harga'];

    if ($aksi == "create"){
        $obat->create($no,$jenis,$bentuk,$harga);
        header("location:indext.php");
    }
    else if ($aksi == "update") {
        $obat->update($id, $no,$jenis,$bentuk,$harga);
        header("location:indext.php");
    }
    else if ($aksi == "delete"){
        $obat->delete($id);
        header("location:indext.php");
    }
}
?>