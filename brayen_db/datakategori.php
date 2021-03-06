<?php
	session_start();
	include 'db.php';
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

 ?>
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
			<h3>Data kategori</h3>
			<div class="box">
				<p><a href="tambah-kategori.php">Tambah Data</a></p>
				<table border="1" cellspacing="0" class="table">
					<thead>
						<tr>
							<th Width="60px">No</th>
							<th>Kategori</th>
							<th Width="150px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$no = 1;
							$kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
								while($row =mysqli_fetch_array($kategori)){
						 ?>
						<tr>
							<td><?php echo $no++ ?></td>
							<td><?php echo $row['category_name']  ?></td>
							<td>
								<a href="edit-kategori.php?id=<?php echo $row['category_id']?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $srow['cate'] ?>">Hapus</a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
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