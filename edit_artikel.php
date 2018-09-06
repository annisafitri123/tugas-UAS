<?php
include_once 'koneksi.php';
//include('login_session.php');
error_reporting(E_ALL);
$title = 'data artikel';
if (isset($_POST['submit'])){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];


	$sql = 'UPDATE artikel  SET ';
	$sql .= "title = '{$nama}',tanggal = '{$tanggal}' ";

	$sql .= "WHERE id ='{$id}' ";
	$result = mysqli_query ($conn, $sql);
	if (!$result) {
		die(mysqli_error($conn));
	}


	header('location:artikel.php');
}

$id =$_GET['id'];
 $sql = "SELECT * FROM artikel WHERE id = '{$id}'";
 $result = mysqli_query($conn, $sql);

 if (!$result) die('error : data tidak tersedia');
 $data = mysqli_fetch_array($result);

function is_select($var, $val){
	if ($var == $val) return 'selected = "selected"' ;
		return false;
	}

	include ('header.php');
	//include('nav.php');
	include('sidebar.php');

?>

<div class="content_a">
	<div class="daftar">
		<div class="main">
			<u><h2>Edit Artikel</h2></u>
			<form action="edit_artikel.php" method="POST" enctype="multipart/form-data">
				<div class="input">
					<label for="">Judul</label>
					<input type="text" name="nama" value="<?php echo $data['title'];?>"></input>
				</div>
				<div>
				<br>
					<label for="">Tanggal</label>
						<input type="date" name="tanggal" value="<?php echo $data['tanggal'];?>"></input>
					</div>
				<br>
				<div class="submit">
					<input type="hidden" name="id" value="<?php echo $data['id'];?>"></input>
					<input type="submit" class="btn btn-large" name="submit" value="Simpan"></input>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include('footer.php');
?>