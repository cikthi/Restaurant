<?php
include('config.php'); 
if(isset($_POST['namaMenu'])) {    
    $jenisMenu = $_POST['jenisMenu'];
    $namaMenu = $_POST['namaMenu'];
    $gambar= $_POST['gambar'];

    $samb = mysqli_connect($host, $user, $password, $database);
    $sql = "UPDATE menu SET  jenisMenu='$jenisMenu',namaMenu='$namaMenu', 
	gambar = '$gambar'WHERE namaMenu = '$namaMenu'";
    $hasil = mysqli_query($samb, $sql); 
    if ($hasil)
        echo "<script>alert('Berjaya kemaskini')</script>";
    else 
        echo "<script>alert('Tidak berjaya kemaskini')</script>";
    echo "<script>window.location='menu.php'</script>";
 } 
// $namaMenu = $_GET['namaMenu'];
$sql = "SELECT * FROM menu ";
$hasil = mysqli_query($samb, $sql);
while ($menu = mysqli_fetch_array($hasil)) {
    
    $jenisMenu = $menu['jenisMenu'];
    $namaMenu = $menu['namaMenu'];
    $hargaMenu = $menu['hargaMenu'];
    $gambar = $menu['gambar'];
    
}
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <head>
        <style>
            .container {
			max-width: 100%;
			margin: auto;
			padding: 20px;
			
		}
        body{
            background-image: url(gambar/300\,000+\ Best\ Free\ Background\ Images\ &\ Pictures\ [HD]\ -\ Pixabay_files/poppies-174276_640.jpg);
            background-size: cover;
        }
        </style>
    </head>
<html>
<body>
    <center>
        <div class="container">
   <table class="table table-success table-striped">
  <thead>
   <th>Gambar</th>
   <th>Menu</th>
   <th>Jenis menu</th>
   <th>Harga (Rm)</th>
   <th>Operasi</th>
  </thead>
        </div>
 
    <form method="POST" >
    <tr>
                        <td>
                        <div class="col-md-10">
                        <div class="input-group">
                            <input type="file" class="form-control" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="gambar"
                                value="<?php echo $gambar;?>">

                        </div>
                    </td>
                    <td>
                          <div class="col-md-10">
                            <input type="text" value="<?php echo $namaMenu;?>" class="form-control" id="validationCustom01" name="namaMenu"
                             maxlength='12' size="15"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus
                                >
                        </div></td>
                    <td>
                         <form class="row g-3 needs-validation" novalidate>
                        <div class="col-md-10">
                        <input type="text" class="form-control" id="validationCustom01" type="text" value="<?php echo $jenisMenu;?>" name="jenisMenu"
                            id="jenisMenu"size="60"  required>
</div>
                        </div>
                    </td>
                        <td>
 <div class="col-md-10">
                            <input type="text" value="<?php echo $hargaMenu;?>" class="form-control" id="validationCustom01" name="hargaMenu"
                                 maxlength='12' size="15"
                                onkeypress='return event.charCode >= 48 && event.charCode <= 57' required autofocus
                                >
                           
                        </div>
                      </td>
                    <td>
                         <button type="submit" class="btn">Submit</button>
                        </td>
                  </tr>     
           
        </form>
</table>
    </center>
</body>
</html>
