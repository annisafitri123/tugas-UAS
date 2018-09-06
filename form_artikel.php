<?php
include_once 'koneksi.php';
include_once 'akses.php';
error_reporting(E_ALL);
$title ='data artikel';
if (isset($_POST['submit'])){
	$nama =$_POST['judul'];
	$content =$_POST['content'];
	$tanggal =$_POST['tanggal'];

	$sql = "INSERT INTO artikel(title,content,tanggal)";
	$sql .="VALUE ('{$nama}','{$content}','{$tanggal}')";
	$result= mysqli_query($conn, $sql);
	if (!$result) {
		die(mysqli_error($conn));
	}
	header('location:index.php');
}
// include('header.php');
// include('sidebar.php')
?>
<title>Admin</title>
<link rel="stylesheet" href="css/style2.css">
<body>
	<div class="container">
		<header>
			
		</header>
		<nav>
			<a href="index.php">Home</a>
			<a href="profile.php">Profile</a>
		</nav>
		<div class="wrap">
			<div class="side">
				
			</div>
			<div class="content">

<h2>Tambah Artikel</h2>
<form method="post" action="" enctype="multipart/form-data">
	<div class="field">
		<label for="">Title</label>
		<input type="text" name="judul" placeholder="Judul Artikel " />
	</div>
	<div class=field>
		<label for="">Content</label>
		<textarea name="content" cols="70" rows="20" placeholder="isi berita"></textarea> 
	</div>
	<div class="field">
		<label for="">Tanggal</label>
		<input type="date" name="tanggal">
	</div>
	<div class="field submit">
		<input type="submit" class="btn btn-large "name="submit" value="Simpan" />
	</div>
			</form>
		</div>
	</div>
</div>
</form>
</div>
<?php
include('footer.php');
?>