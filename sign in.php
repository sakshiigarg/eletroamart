<?php
  session_start();
 ?>
<html>
<body>
  <?php

if(isset($_POST['name']) && isset($_POST['password']))
{
  $db = mysqli_connect('localhost' ,'root' ,'' ,'electromart');
  $sql = sprintf("SELECT * FROM users WHERE username='%s'",
            mysqli_real_escape_string($db, $_POST['name'])
          );
  //print_r(mysqli_real_escape_string($db, $_POST['name']));
  $result = mysqli_query($db, $sql);
  if (!$result) {
    die('Invalid query: ' . mysql_error());
}
  $row = mysqli_fetch_assoc($result);
      if($row)
      {
          $hash=$row['password'];
          if(password_verify($_POST['password'],$hash))
          {
              echo '<p style=color:white;font-size:30px;text-align:center;margin-top:50px>login successful</style></p>';
              $_SESSION['username']=$row['username'];
              $_SESSION['password']=$row['password'];
              $_SESSION['logged in']=true;
            header("location: project21.php");
            }
          else {
              echo '<p style=color:white;font-size:30px;POSITION:absolute;top:50px;left:30%;z-index:3;font-size:50px;>login failed</style></p>';
        }
      }
        else {

          echo '<p style=color:white;POSITION:absolute;top:50px;left:30%;z-index:3;font-size:50px;>login failed</p>';
        }
        mysqli_close($db);
}

?>
  <link rel="stylesheet" href="signin.css" type="text/css">
  <div class="log-title">
    <center>
    <form method="post" action="" id="form">
      USERNAME:<input type="text" name="name"><br><br>
      PASSWORD:<input type="password" name="password">
    <div id="button">
    <input type="submit" name="login" value="login" onsubmit="">
  </div>
    </form>
</center>
</div>
</body>
</html>
