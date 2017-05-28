
<?php
session_start();
 ?>
<html>
<head>
  <title>payment</title>
</head>
<body>
  <?php
  if(isset($_POST['submit']))
  {
    $bank="";
    $cvv="";
    $card="";
    $ok=true;
    if(!isset($_POST['bank']) || $_POST['bank']==='')
    {
      $ok=false;
    }
    else {
      $ok=true;
      $bank=$_POST['bank'];
    }
    if(!isset($_POST['cvv']) || $_POST['cvv']==='')
    {
      $ok=false;
    }
    else {
      $ok=true;
      $cvv=$_POST['cvv'];
    }
    if(!isset($_POST['card']) || $_POST['card']==='')
    {
      $ok=false;
    }
    else {
      $ok=true;
      $card=$_POST['card'];
    }
    if($ok){

      $db= mysqli_connect('localhost' ,'root' ,'' ,'electromart');
      $hash = password_hash(mysqli_real_escape_string($db,$cvv),PASSWORD_DEFAULT);
    $sql=sprintf("INSERT INTO payment (bankname,cvv,cardno) VALUES ('%s' ,'%s' ,'%s')",
                                                                mysqli_real_escape_string($db,$bank),
                                                                mysqli_real_escape_string($db,$hash),
                                                                mysqli_real_escape_string($db,$card));
      $result=mysqli_query($db,$sql);
      if (!$result) {
        die('Invalid query: ' . mysql_error());
      }
      mysqli_close($db);
      //$msg="thank you for your purchase, your payment has been received.";
      //$to=$SESSION_['email'];
      //$subject="confirmation";
      //$headers='from:mandhanasuyash@yahoo.in';
      //mail($to,$subject,$msg,$headers);
      echo "<center><p style=color:white;font-family:sans-serif;font-size:20px;position:absolute;top:50px;left:50%;z-index:3;>thank you!
      </style></p></center>";
  }
}
?>
<header>
  <b style="color:white;" id="title">ELECTROMART</style></b>
  <a href="project21.php" style="font-family:sans-serif;">HOME</a>
  <a href="project2.php" id="signout" style="float:right;margin-right:20px; font-size:20px;font-family:sans-serif">sign out</a>
</header>
  <link rel="stylesheet" href="payment.css" type="text/css">
  <section id="banner">
  </section>
<center>
  <form method="post" action="">
    <pre>
     Bank name:  <input type="text" name="bank"><br>
      Card no.:  <input type="text" name="card"><br>
           CVV:  <input type="password" name="cvv" max="3" min="3"><br>
   </pre>
    <input type="submit" value="make payment" name="submit">
  </form>
</center>
</body>
</html>
