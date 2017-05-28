<?php
session_start();
 ?>
<html>
<head>
  <title>Telivisions</title>
</head>
<body>
  <link rel="stylesheet" href="tv.css" type="text/css">
<header>
  <b style="color:white;" id="title">ELECTROMART</style></b>
  <a href="project2.php">HOME</a>
  <a href="project2.php" id="signout">sign out</a>
</header>
<div class="pro-img1">
<center><b>Sony 54.6cm (22) Full HD LED TV
  (BRAVIA KLV-22P413D, 1 x HDMI, 1 x USB)<b></center>
  <img src="telivisions/tv1.jpg" height="200px" width="200px" style="margin-left:50px;margin-top:10px;">
    <center><b style="font-size:20px;">₹12,999</b></center>
    <b><center>color:</center><b><center>  <form method="post">
      <select name="color">
        <option value="b">black</option>
        <<option value="g">grey</option>
      </select>
</form></center>
    <center><form method="post"> <input type="submit" name="submit" value="buy"></form>

</div>
<div class="desc1">
<pre> Features<ul><li>176(H) degree Viewing Angle</li>
<li>20 W Speaker Output</li>
<li>Dolby Digital</li></pre>
<pre>
<p style="font-size:20px;"> Specifications</p><u> General</u>
 Sales Package: TV Unit, Remote Control (RMT-TX112P), Batteries (R03),
 AC Power Adaptor,AC Power Cord, Operating Instructions,Table Top Stand
 Model Name: BRAVIA KLV-22P413D
 Display Size: 54.6 cm (22)
 Screen Type: LED
 HD Technology & Resolution: Full HD, 1920 x 1080
 3D: No
</pre>
</div>
<div class="pro-img2">
  <center><b>Panasonic 81cm (32) HD Ready LED TV
    (TH-32C350DX, 1 x HDMI, 1 x USB)<b></center>
    <img src="telivisions/tv2.jpg"id="tv2" height="200px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
      <center><b style="font-size:20px;">₹16,999</b></center>
      <b><center>color:</center><b><center>  <form method="post">
        <select name="color">
          <option value="b">black</option>
          <<option value="g">grey</option>
        </select>
  </form></center>
      <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
  </div>
      <div class="desc2">
        <pre> Features<ul><li>176 degree Viewing Angle for minimal glare on wide viewing</li><li>16 W Speaker Output for optimal sound</li><li>100 Hz Refresh Rate for a blur-free picture quality</li><li>True surround sound for better sound clarity</li>
      </pre>
        <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
 Sales Package:TV Unit, Remote Control, 2 Cells, Power Cable, User Manual,
 Warranty Card, Wall Mount
 Model Name:TH-32C350DX
 Display Size:81 cm (32)
 Screen Type:LED
 HD Technology & Resolution:HD Ready, 1366 x 768
 3D:No
  </pre>
  </div>
  <div class="pro-img3">
    <center><b>Micromax 101cm (40) Full HD LED TV
      (40A6300FHD, 2 x HDMI, 2 x USB)<b></center>
      <img src="telivisions/tv3.jpg"id="tv2" height="200px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
        <center><b style="font-size:20px;">₹22,999</b></center>
        <b><center>color:</center><b><center>  <form method="post">
          <select name="color">
            <option value="b">black</option>
            <<option value="g">grey</option>
          </select>
    </form></center>
        <center><form method="post"> <input type="submit" name="submit" value="buy"></form>

    </div>
    <div class="desc3">
      <pre> Features<ul><li>10 W x 2 Speaker Output</li><li>60 Hz Refresh Rate</li>
    </pre>
      <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
 Sales Package:TV Unit, Remote Controller, Battery (For Remote Controller),
 All in One - Quick Installation Guide and User Manual, Wall Mount Support
 Model Name:40A6300FHD
 Display Size:101 cm (40)
 Screen Type:LED
 HD Technology & Resolution:Full HD, 1920 x 1080
 3D:No
</pre>
</div>
<?php
if(isset($_POST['submit'])){

  if(! empty($_SESSION['logged in']))
  {
          header('location:payment.php');
  }
  else {
    echo '<script language="javascript">';
  echo 'alert("you are not logged in")';
  echo '</script>';
  }
}
?>
</body>
</html>
