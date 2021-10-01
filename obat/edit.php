<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Edit</title>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-sm bg-success navbar-dark">
        <a class="navbar-brand" href="../home/beranda.php" >Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="create.php" >Create</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="show.php" >Show</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
    <a  href="login.php"  class="btn btn-outline-success my-2 my-sm-0" type="submit">Keluar</a>
</nav>


            <center><h2>Obat</h2></center>
        <!-- CARDs -->
        <div class="container">
        <div class="card">
            <div class="card-header">
                Edit Obat
            </div>
            <div class="card-body">
            <?php
                include '../database.php';
                $obat = new Obat ();
                foreach ($obat->edit($_GET['id']) as $data) {
                    $id = $data['id'];
                    $no = $data['nama_obat'];
                    $jenis = $data['jenis_obat'];
                    $bentuk = $data['bentuk_obat'];
                    $harga = $data['harga'];
                    
                }
            ?>
            <form action="../obat/proses.php" method="post">
                <input type="hidden" name="aksi" value="update">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Id</label> 
                        <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Obat</label>
                        <input type="text" class="form-control" name="no" value="<?php echo $no; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Jenis Obat</label>
                        <input type="text" class="form-control" name="jenis" value="<?php echo $jenis; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Bentuk Obat</label>
                        <input type="text" class="form-control" name="bentuk" value="<?php echo $bentuk; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">harga Obat</label>
                        <input type="text" class="form-control" name="harga" value="<?php echo $harga; ?>">
                    </div>

                    <button type="submit" name="save" class="btn btn-primary">Simpan</button>
                </form>

            </div>
        </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>