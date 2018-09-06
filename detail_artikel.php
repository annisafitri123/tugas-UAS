<?php
        error_reporting(E_ALL);
        include('koneksi.php');
        //include('login_session.php');
        $title='data artikel';
        $tgl= date('Y-m-d');
if (isset($_POST['submit'])){
    $id =$_POST['id_artikel'];
    $nama =$_POST['nama'];
    $content =$_POST['email'];
    $komentar =$_POST['komentar'];
     $tanggal =$_POST['tanggal'];


    $sql = "INSERT INTO komentar(id_artikel,nama,email,komentar,tanggal)";
    $sql .="VALUE ('{$id}','{$nama}','{$content}','{$komentar}','{$tanggal}')";
    $result= mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
    header('location:index.php');
}


        $id= $_GET['id'];
     //  $sql= "select * from artikel where id_artikel = '{$id}'";
        $sql="select b.id_artikel,
              b.title,
              b.content,
              b.tanggal,
              k.nama,
              k.komentar,
              k.tanggal,
              k.id
              from artikel b
              join komentar k 
              on b.id_artikel = k.id_artikel 
              where b.id_artikel='{$id}'
                ";


      
        $result= mysqli_query($conn, $sql);

        if (!$result) die ('error : data tidak tersedia');
        $row = mysqli_fetch_array($result);

        function is_select($var, $val){
        	if ($var==$val) return 'select="selected"';
        	return false;
        }
    
      // include('header.php');
      //  include('sidebar.php');
       
        ?>
        <head>
  <meta charset="utf-8">
  <!-- pemanggilan file css -->   
  <title>Detail</title>
  <link rel="stylesheet" href="css/style2.css">
   <!-- <script src="js/main.js"></script> -->
</head>
<body>
  <div class="container">
    <!-- header -->
    <header>
      
    </header><!-- endof header -->

    <!-- navigasi -->
    <nav>
      <a href="index.php">Home</a>
      <a href="profile.php">Profile</a>
      <a href="kontak.php">Kontak</a>
      <a href="admin.php">Admin</a>
    </nav><!-- endof navigasi -->

    <!-- wrapcontent -->
    <div class="wrap">
      <div class="side">
        
        <div class="wrap">
        </div>
        </div>
      <div class="content">
          <div clas="post">
        	<div class="main">

                <h3><?php echo $row['title'];?></h3>
                <p><?php echo $row['content'];?></p><br><br><br>
                <h4>Komentar</h4>
            <form action="detail_artikel.php" method="POST" enctype="multipart/form-data">
                <div class="input">
                   
                    <input type="hidden" value="<?php echo $row['id_artikel']; ?>" name="id_artikel">
                </div>
                <div class="field">
                    <label for="">Nama</label>
                    <input type="text" name="nama" >
                </div>
                <div class="field">
                    <label for="">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="field">
                <label for="">Isi komentar</label>
                    <textarea  name="komentar"  ></textarea>
                </div>
                 <div class="field">
                   
                    <input type="hidden" value="<?php echo $tgl; ?>" name="tanggal">
                </div>
                <div class="field-submit">
                    <input type="submit" class="btn btn-large" name="submit" value="kirim"></input>
                </div>

  <?php  while($data = mysqli_fetch_array($result)): ?>
    <p>Komentar oleh <b><?php echo $data['nama'];?></b> pada tanggal, <?php echo date("j F Y", strtotime($data['tanggal']));?></p><br>
     <p><?php echo $data['komentar'];?></p>

    
    <h5 id="link_komentar"><a href="hapus_komentar.php?id=<?php echo $data['id'];?>" >hapus kometar</a></h5><br><br>
 <?php endwhile ; ?>
             </div>
        </div>
</form>
</div>
</div>
        <?php
        include_once('footer.php');
        ?>



