<?php
session_start();
 ?>
<html>
<body>
  <?php
    if(isset($_POST['submit']))
    {
        $ok=true;
        if(!isset($_POST['name']) || $_POST['name']==='')
        {
          $ok=false;
        }
        else {
          $ok=true;
        }
        if(!isset($_POST['password']) || $_POST['password']==='')
        {
          $ok=false;
        }
        else {
          $ok=true;
        }
        if($ok){
          $db= mysqli_connect('localhost' ,'root' ,'' ,'electromart');
          $hash = password_hash(mysqli_real_escape_string($db,$_POST['password']),PASSWORD_DEFAULT);
          $sql= sprintf("INSERT INTO users (username,password,email) VALUES('%s','%s','%s')",
                                                            mysqli_real_escape_string($db,$_POST['name']),
                                                            mysqli_real_escape_string($db,$hash),
                                                            mysqli_real_escape_string($db,$_POST['email']));
          mysqli_query($db,$sql);
          mysqli_close($db);
          $_SESSION['email']=$_POST['email'];          echo '<p style=color:white;font-size:30px;text-align:center;margin-top:50px>user added</style></p>';
          header('location:sign in.php');
        }
    }
   ?>
   <section id="banner">
   </section>
  <link rel="stylesheet" href="signup1.css" type="text/css">
  <div id="form">
  <form method="post" action="" onsubmit="return myfunction()">
    <div id="name" class="block">
      USERNAME:<br><input type="text" name="name" id="names">
    </div>
    <div id="pass" class="block">
      PASSWORD:<br><input type="password" name="password" id="hello">
    </div>
    <div id="email" class="block">
      EMAIL:<br><input type="text" name="email" id="email">
    </div>


    <input type="submit" name="submit" value="signup" onsubmit="sign in.php">
  </form>
  </div>
  <script>
  function myfunction()
  {
    var x=document.getElementById('names').value;
    var z=document.getElementById('hello').value;
    var y=document.getElementById('email').value;
    if(x=="")
    {
      alert("name must be entered");
      return false;
    }
    else if (z=="") {
      alert("password must be entered");
      return false;
    }
    else if(y==""){
      alert("email must be entered");
      return false;
    }
  }
  </script>
</body>
</html>
