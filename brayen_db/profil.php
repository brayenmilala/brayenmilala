<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Brayen db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<!--header -->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Brayendb</a></h1>
		<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="profil.php">Profil</a></li>
		<li><a href="datakategori.php">Data Kategori</a></li>
		<li><a href="data-produk.php">Data Produk</a></li>
		<li><a href="keluar.php">Keluar</a></li>
		<li><a href="registrasi.php">Registrasi</a></li>
		</ul>
	</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Profil</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" required="">
					<input type="text" name="user" placeholder="Username" class="input-control" required="">
					<input type="text" name="hp" placeholder="No Handphone" class="input-control" required="">
					<input type="email" name="email" placeholder="Email" class="input-control" required="">
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" required="">
					<input type="submit" name="submit" value="Ubah profil" class="btn">
				</form>


			</div>

			<h3>Ubah Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="paswwordlama" placeholder="Paswword Lama" class="input-control" required="">
					<input type="text" name="passwordbaru" placeholder="Password Baru " class="input-control" required="">
					<input type="ubahpasword" name="ubahpasword" value="Ubah pasword" class="btn">
				</form>
				


			</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Dibuatoleh &copy; 2021-Brayenmilala.</small>
		</div>
	</footer>
</body>
</html>