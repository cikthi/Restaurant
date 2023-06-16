<?php
//sambung ke pangkalan data
include "config.php";
//mulakan sesi login untuk kekalkan login 
session_start();
//semak sama ada data dengan ID pengguna nama telah dihantar
if (isset($_POST['user'])){
    //pembolehubah untuk memegang data yang dihantar
    $username = $_POST['user'];
    //arahan sql akan dilaksanakan
    $sql = "SELECT * FROM daftar WHERE user='$username'";
    //Melaksanakan pertanyaan sql dengan sambungan ke pangkalan data
    $hasil = mysqli_query($samb,$sql);
    // semak untuk melihat jika ada sebarang rekod dalam pangkalan data
    if (mysqli_num_rows($hasil)){
        //mulakan sesi login dengan id guru yang login
        $_SESSION['user']=$username;
        //bawakan ke dashboard pelajar
        header("Location: menu.php");
    }
    else{
        //paparkan mesej jika gagal lain 
        echo "<script>alert('username/password not match');
        window.location='login.php'</script>";
    }
}
?>
<link rel="stylesheet" href="login.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<html>
    <body style="background-image: url(gambar/wallpaperLog.jpg);">
        <fieldset>
          <center>
          <h1>LOG IN</h1> 
          
            <form method="POST" >
                
                <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" name="user">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-5">
      <input type="password" class="form-control" id="inputPassword" name="pass">
    </div>
  </div>
                <button class="btn">Login</button>
            </form>
        </center>
        </fieldset>
    </body>
</html>