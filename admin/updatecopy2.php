<?php 
include "config.php";

    if (isset($_POST['update'])) {
        $namaMenu = $_POST['namaMenu'];
        $jenisMenu= $_POST['jenisMenu'];
        $hargaMenu =$_POST ['hargaMenu'];
        $gambar = $_POST['gambar'];
    $sql = "UPDATE menu SET jenisMenu='$jenisMenu',hargaMenu='$hargaMenu',gambar='$gambar' WHERE namaMenu='$namaMenu'"; 
        $result = $samb->query($sql); 

        if ($result == TRUE) {
            echo "<script>alert('Record updated successfully.');
            window.location='menu.php'</script>";
        }else{
            echo "Error:" . $sql . "<br>" . $samb->error;
        }
    } 

if (isset($_GET['namaMenu'])) {
    $namaMenu = $_GET['namaMenu']; 
    $sql = "SELECT * FROM menu WHERE namaMenu='$namaMenu'";
    $result = $samb->query($sql); 

    if ($result->num_rows > 0) {        
        while ($row = $result->fetch_assoc()) {
            $namaMenu = $row['namaMenu'];
            $jenisMenu = $row['jenisMenu'];
            $hargaMenu  = $row['hargaMenu'];
            $gambar = $row['gambar'];
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
            <h2>Kemaskini Menu</h2>
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
          upFileAddon04" aria-label="Upload" name="gambar"
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
                            id="jenisMenu" size="60"  required>
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
<?php
    } 
}
?>