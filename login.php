<?php 

include 'database.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Login</title>
  </head>
   <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  
</style>


<!-- Custom styles for this template -->


</head><link href="login.css" rel="stylesheet">
<body class="text-center ">


<main class="form-signin">
<form  method="post">
<!-- <img class="mb-4" src="ar.jpg" alt="" width="120" height="90"> -->
<h1 class="h3 mb-3 fw-normal">Please sign in</h1>

<div class="form-floating">
    <label for="floatingInput">Email address</label>
  <input type="email" class="form-control" id="floatingInput" placeholder="Masukan Username" name = "username">
  
</div>
<div class="form-floating " >
    <label for="floatingPassword">Password</label>
  <input type="password" class="form-control" id="floatingPassword" placeholder="Masukan Password" name = "password">
  
</div>

<div class="checkbox mb-3">
 
</div>
<input class="w-100 btn btn-lg btn-primary" name = "masuk" type="submit" value ="Masuk">

</form>
</main>



</body>


</Form>
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
<?php
if (isset($_POST['masuk']))
 {
    $sql = mysqli_query($koneksi, "select * from tb_user where username = '$_POST[username]' 
    and password = '$_POST[password]'");

    $cek = mysqli_num_rows($sql);
    if ($cek > 0) {
    $_SESSION['username'] = $_POST['username'];

    echo "<meta http-equiv=refresh content=0;URL='rumah.php'>";
    }
    else {
        
        echo "<h3><p align=center+<b>Username dan Password salah ! </b></p>";
        echo "<meta http-equiv=refresh content=2;URL='login.php'></h3>";
    }
}?>

