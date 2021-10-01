<?php
include '../database.php';
$obat = new Customer();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $kd   = @$_POST['kd_customer'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    

    if ($aksi == "create"){
        $obat->create($nama,$alamat);
        header("location:indext.php");
    }
    else if ($aksi == "update") {
        $obat->update($kd, $nama,$alamat);
        header("location:indext.php");
    }
    else if ($aksi == "delete"){
        $obat->delete($kd);
        header("location:indext.php");
    }
}
?>