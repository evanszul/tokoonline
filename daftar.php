<?php error_reporting(""); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Daftar | GelarTikar.com</title>
    <link rel="stylesheet" href="./style/css/loginstyle.css">
    <meta name="viewport" content="width=device-width , initial-scale=1">
  </head>

  <body>

    <div id="login">
      <div class="center">
          <center>
            <img src="./image/logo/logo_web.png" width="100%"/>
          </center>
          <p><b>Silakan masukkan data anda dengan baik dan benar. </b></p>
          <p style="color:red"> <b> <?php echo $_GET['error']; ?> </b> </p>
          <form class="fl" action="./sistem/mendaftar.php" method="post">
            <input class="itpw" type="text" name="nama" value="<?php echo $_GET['nama']; ?>" placeholder="Nama Lengkap"><br>
            <input class="itpw" type="email" name="email" value="<?php echo $_GET['email']; ?>" placeholder="Email"><br>
            <input class="itpw" type="text" name="username" value="<?php echo $_GET['username']; ?>" placeholder="Username"><br>
            <input class="itpw" type="password" name="password" placeholder="Password"><br>
            <input class="itpw" type="text" name="no_hp_user" value="<?php echo $_GET['no_hp_user']; ?>" placeholder="Nomor Handphone"><br>
            <button class="its" type="submit" name="daftar"> <b> Daftar </b> </button>
          </form>

          <p>Sudah punya akun? <a href="./login.php">Login di sini</a></p>

      </div>
    </div>

  </body>
</html>
