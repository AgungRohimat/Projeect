<?php
    class Database{
        public $host = "localhost", $user = "root", $pass = "", $db="apotik";
        public $koneksi;

        public function __construct()
        {
            $this->koneksi = mysqli_connect(
                $this->host,
                $this->user,
                $this->pass,
                $this->db
            );
            if($this->koneksi){
                // echo"Berhasil";
            }
            else
            {
                echo"Koneksi Database Gagal";
            }
        }
    }

    $db = new Database();

    include 'obat.php';
    include 'customer.php';
    
    
    
?>