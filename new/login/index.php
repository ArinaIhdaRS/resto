<?php require('login.php');
?>
<link rel="stylesheet" href="login/css/loginn.css" media="screen" title="no title" charset="utf-8">
<title>Login</title>


  <div id="log">

    <div id="tittle">

      <h1 style="font-family: 28 days later;">Welcome!</h1><p>Silakan Isikan Nomor Meja dan Password</p>
      <?php
      if(isset($message))
      {
           echo '<div class="alert-danger">'.$message.'</div>';
      }
      ?>
<body style="background-image:url(background.jpg)" >  </body>
    </div>


    <div id="input">
      <form action="" method="post" name="form1">

        <div>
          <input type="username" name="username" placeholder="Table Number" required>
        </div>

        <div style="margin-top:10px">
          <input type="password" name="password" placeholder="Password" required>
        </div>

        <div style="margin-top:10px">
          <button type="submit" name="login" id="btn">Log In</button>
        </div>

      </form>
        <p><small>&copy; 2017 Kelompok 7</span></small></p>

    </div>


  </div>
