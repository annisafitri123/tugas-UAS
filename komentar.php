  <?php 
 //require('header.php');
 include('login_session.php');
 ?>

  <h4>Komentar</h4>
            <form action="form_artikel.php" method="POST" enctype="multipart/form-data">
                <div class="input">
                    <label for="">Nama</label>
                    <input type="text" name="nama" >
                </div>
                <div class="input">
                    <label for="">Email</label>
                    <input type="text" name="email">
                </div>
                <div class="input">
                <label for="">Isi komentar</label>
                    <textarea  name="komentar"  ></textarea>
                </div>