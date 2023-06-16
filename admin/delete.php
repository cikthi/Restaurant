<?php
// Assuming you have already established a database connection
include('config.php');
if(isset($_GET['namaMenu'])){
$namaMenu = $_GET ['namaMenu']; 
}

 $sql = "DELETE  FROM menu  WHERE namaMenu = '$namaMenu'" ;
 $hasil = mysqli_query($samb, $sql);
 if ($hasil == TRUE)
 {
 echo "<script>alert('Berjaya padam rekod')
 window.location='menu.php'</script>";
 }
    else 
   
{
echo "<script>alert('Tidak berjaya padam rekod')</script>";

}

?>

<!-- Display a confirmation message with a delete button -->
<p>Are you sure you want to delete this record?</p>
<a href="delete.php?namaMenu=<?php echo $_GET["namaMenu"]; ?>">Delete</a>
