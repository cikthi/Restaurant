<?php
//sambung ke pangkalan data 
include "config.php";
?>
<!DOCTYPE html>
<html>

<head>
	<title>Menu Page</title>

	<style>
		body {
			margin: 0;
			font-family: var(--bs-font-sans-serif);
			font-size: 1rem;
			font-weight: 400;
			line-height: 1.5;
			background-size: cover;
			color: #000000;
			background-color: #FFEBB4;
			-webkit-text-size-adjust: 100%;
			-webkit-tap-highlight-color: transparent;
		}

		header {
			background-color: #FFBFA9;
			color: black;
			text-align: center;
			
			
		}


		.title{
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			font-style: oblique;
			text-align: center;
			position: relative;
			top: 20px;
		}

		
		section .menu{
			display: flex;
    flex-wrap: wrap;
		}
		nav {
			background-color: #5f5555;
			padding: 10px;
			text-align: center;
		}

		nav a {
			display: inline-block;
			padding: 10px;
			color: #333;
			text-decoration: none;
			font-weight: bold;
			font-size: 16px;
		}

		nav a:hover {
			background-color: #333;
			color: #fff;
		}

		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		h2 {
			margin-top: 0;
		}
		
		
		.btn{
			text-decoration: none;
			color: #FFBFA9;
		}
		.promosi{
			border-radius: 10px;
			position: absolute;
			top: 55em;
			right: 1em;

		}
		.card{
		
      display: flex;
      align-items: center;
    }
		
	</style>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
	integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<body>
	<header>
		<div class="title">
<h1>SELAMAT MENJAMU SELERA</h1>
		</div>
		<div class="logo">
			<img src="gambar/heaven__food-removebg-preview.png" alt="logocompany" width="200px" height="200px">
		</div>
		

		<div class="contact us">
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill"
			viewBox="0 0 16 16">
			<path fill-rule="evenodd"
				d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
		</svg>
		<i class="bi bi-telephone-fill">018-2170162 | </i>

		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill"
			viewBox="0 0 16 16">
			<path
				d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
		</svg>
		<i class="bi bi-envelope-fill">athirahsuhairi1@gmail.com</i>
		</div>
	

	</header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand" href="add.php">Add Menu</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
				data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"
				aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
							data-bs-toggle="dropdown" aria-expanded="false">
							Option
						</a>
						<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
							<li><a class="dropdown-item" href="minum.php">Drink</a></li>
							<li><a class="dropdown-item" href="makan.php">Food</a></li>
							<li><a class="dropdown-item" href="login.php">Log Out</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	
	<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="gambar/menu.png" class="d-block w-100" alt="menu" height="500px">
    </div>
    <div class="carousel-item">
      <img src="gambar/burger.jfif" class="d-block w-100" alt="promoted" height="500px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<section class="menu">
	<?php
	  $samb= mysqli_connect($host, $user, $password, $database);
	  $sql = "SELECT * FROM menu ORDER BY namaMenu";
$result =  mysqli_query($samb,$sql);;
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
?>
	<div class="card" style="width: 18rem;background:#FBFFB1;border-radius:10px;margin:10px">
  <img src="<?php echo $row["gambar"] . "<br>"; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><h3> <?php echo " " . $row["namaMenu"] . "<br>"; ?></h3></h5>
    <p class="card-text"><p><?php echo " " . $row["jenisMenu"] . "<br>"; ?></p>
			<p> <?php echo " " . $row["hargaMenu"] . "<br>"; ?></p>
		</p>
			<button type="button" class="btn";><a href="delete.php
			?namaMenu=<?php
			echo $row['namaMenu'];?>" style="color: #000000;text-decoration:none;">Delete</a></button>
					<button type="button" class="btn"><a href="update.php" style="color: #000000;text-decoration:none;">Update</a> </button></td>
				
  </div>
</div></section>
<?php
} }else{
  echo "No records found.";
}?>

<aside>
	<div class="promosi">
	<img src="gambar/promosi.png" alt="promosi" width="550em" >
	</div>
	
</aside>
</body>

</html>
