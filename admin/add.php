<?php
include('config.php'); 
if(isset($_POST['namaMenu'])) {    
    $namaMenu = $_POST['namaMenu'];
    $jenisMenu = $_POST['jenisMenu'];
    $hargaMenu = $_POST['hargaMenu'];
    $gambar =$_POST ['gambar'];
    $sql = "INSERT INTO menu (namaMenu, jenisMenu, hargaMenu, gambar)
    VALUES ('$namaMenu', '$jenisMenu', '$hargaMenu' ,'$gambar')";
    $samb = mysqli_connect($host, $user, $password, $database);
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya ditambah')
        window.location='menu.php'</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='add.php'</script>";
}
?>


    <title>Tambah Menu</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="add.css">
  
    <style>
        button{
margin: 10px;
        }
        body{
            color: white;
        }
    </style>
<body>
<form method="POST" >
    <h1>PENAMBAHAN MENU PADA LIST : </h1>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label" type="text">Nama Menu:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="namaMenu"
                          id="namaMenu" placeholder="nasi ayam madu" size="60" required>

                    </div>
                    <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">Pilih Jenis Menu :</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="jenisMenu"
                            id="jenisMenu" placeholder="makanan / minuman" size="60" required>
                        </div>              
                        <div class="col-md-4">
                
                        <label for="validationCustom01" class="form-label" type="text">Pilih Harga:</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text" name="hargaMenu"
                            id="hargaMenu" placeholder="Rm 24.00" size="60" required>
                        </div>

                        <br>
                        </div>
                      
<div class="input-group">
  <input type="file" class="form-control" id="inputGroupFile01" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="gambar">
                        <div class="col-12">
                            <button class="btn btn-secondary" type="submit" >Submit</button>
                            <button class="btn btn-secondary " type="reset">Reset</button><br><br>
                          <button type="button" class="btn btn-secondary" ><a href="menu.php" style="text-decoration: none;color:white">Home</a></button>
                          
                    </form>
</body>
</html>