<?php
include('config.php'); 
if(isset($_POST['namaMenu'])) {    
    $namaMenu = $_POST['namaMenu'];
    $jenisMenu= $_POST['jenisMenu'];
    $hargaMenu =$_POST ['hargaMenu'];
    $gambar = $_POST['gambar'];

   
    $samb = mysqli_connect($host, $user, $password, $database);
    $sql = "UPDATE menu SET namaMenu='$namaMenu', jenisMenu='$jenisMenu',hargaMenu='$hargaMenu' , gambar ='$gambar' WHERE namaMenu = '$namaMenu'";
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert(' Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='menu.php'</script>";
 } 
// $namaMenu = $_GET['namaMenu'];
$sql = "SELECT * FROM menu";
$hasil = mysqli_query($samb, $sql);
while ($menu = mysqli_fetch_array($hasil)) {
    $namaMenu = $menu['namaMenu'];
    $jenisMenu = $menu['jenisMenu'];
    $hargaMenu = $menu['hargaMenu'];
    $gambar = $menu['gambar'];
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   
<html>

<body>
    <center>
        <form method="POST">
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label" type="text">Nama Menu:</label>
                    <input type="text" class="form-control" id="validationCustom01" value="<?php echo $namaMenu;?>"
                        type="text" name="namaMenu" id="namaMenu" size="60" required>

                </div>
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-4">

                        <label for="validationCustom01" class="form-label" type="text">Jenis Menu :</label>
                        <input type="text" class="form-control" id="validationCustom01" type="text"
                            value="<?php echo $jenisMenu;?>" name="jenisMenu" id="nama" size="60" required>
                    </div>
                    <br>
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom04" class="form-label">Harga : </label>
                        <input type="text" value="<?php echo $hargaMenu;?>" class="form-control" id="validationCustom01"
                            name="hargaMenu">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="gambar"
                                value="<?php echo $gambar;?>">
                        </div>
                        <button type="submit">Submit</button>
                </form>
    </center>
</body>

</html>