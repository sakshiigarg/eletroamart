<?php
session_start();
session_destroy();
echo '<p style="color:black;position:absolute;top:35px;left:40%;z-index:4;font-size:20px;">logged out successfully</style></p>';
 ?>
<html>
<head>
  <title>shopping</title>
</head>
<body>
<link rel="stylesheet" href="project2.css" type="text/css">
<section id="banner">
</section>
<header>
  <b style="color:white;" id="title">ELECTROMART</style></b>
  <a href="#" id="home">HOME</a>
    <a href="sign in.php" id="signin">SIGN IN</a>
    <a href="signup.php" id="signup">SIGN UP</a>
</header>
<div class="items" id="tv">
  <pre><b style="font-size:35;">Telivisions</b></style>
Our Most Beautiful Picture Ever</pre>
<a href="tv.php"><img  src="tv1.jpg" id="tv1"></style></a>


</div>
<div class="items" id="speakers">
  <pre><b style="font-size:35;">Audio Systems</b></style>
Wanna Make Some Noise?</pre>
  <a href="speaker.php"><img  src="speaker1.jpg" id="tv1"></style></a>
</div>
<div class="items" id="dslr">
  <pre><b style="font-size:35;">Dslrs</b></style>
Lets Take Some HD Photos</pre>
  <a href="dslr.php"><img  src="dslr1.jpg" id="tv1"></style></a>
</div>

</body>
</html>
