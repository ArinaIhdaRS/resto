<?php require('login.php');
?>
<link rel="stylesheet" href="login/css/login.css" media="screen" title="no title" charset="utf-8">
<title>Login</title>


  <div id="log">

    <div id="title">

      <p>Selamat Datang<p>Selamat Menikmati</p>
      <?php
      if(isset($message))
      {
           echo '<div class="alert-danger">'.$message.'</div>';
      }
      ?>

    </div>


    <div id="input">
      <form action="" method="post" name="form1">

        <div>
          <input type="username" name="username" placeholder="Username" required>
        </div>

        <div style="margin-top:10px">
          <input type="password" name="password" placeholder="Password" required>
        </div>

        <div style="margin-top:10px">
          <button type="submit" name="login" id="btn">Log In</button>
        </div>

      </form>
        <p><small>&copy; 2017 Kelompok7</span></small></p>

    </div>


  </div>
