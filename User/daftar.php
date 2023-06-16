<?php
//sambung ke pangkalan data
include "config.php"; 
//semak sama ada data dengan ID pengguna nama telah dihantar 
if (isset($_POST['user'])) {
//pembolehubah untuk memegang data yang dihantar

$username = $_POST['user'];
$password = $_POST['pass'];

//tambah rekod baru ke dalam table
$sql = "INSERT INTO daftar (user, pass) 
VALUES ('$username', '$password')";
// Melaksanakan pertanyaan sql dengan sambungan ke p.data
$hasil = mysqli_query($samb, $sql);
//semak untuk melihat jika ada sebarang rekod dalam pangkalan data 
// papar mesej berjaya atau gagal simpan rekod baru 
if ($hasil) {
echo "<script>alert('correctly');
 window.location='login.php'</script>";

}
else{
    echo "<script>alert('user sama');
window.location='daftar.php'</script>";
}
}
?>
<link rel="stylesheet" href="daftar.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- HTM1 Bermula -->
<html>
<h2>
<img src="gambar/heaven__food-removebg-preview.png" alt="">Daftar Baru</h2>

<body>
    <fieldset>
        <!-- Papar Borang Pendaftaran -->
        <form method="POST">
            <div class="form-floating mb-1">
                <input type="text" class="form-control" id="floatingInput" name="user">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="pass">
                <label for="floatingPassword">Password</label>
            </div>
            <!--butang type-->

            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button><br><br>
        </form>
    </fieldset>
</body>

</html>