<?php
session_start();
 ?>
<html>
<head>
  <title>Dslrs</title>
</head>
<body>
  <link rel="stylesheet" href="tv.css" type="text/css">
<header>
  <b style="color:white;" id="title">ELECTROMART</style></b>
  <a href="project2.php">HOME</a>
  <a href="project2.php" id="signout">sign out</a>
</header>
<div class="pro-img1">
<center><b>Canon EOS 1300D DSLR Camera (Body with EF-S 18 - 55 mm IS II + EF-S 55 -
  250 mm F4 5.6 IS II)
<b></center>
  <img src="dslr/dslr1.jpg" height="200px" width="200px" style="margin-left:50px;margin-top:10px;">
    <center><b style="font-size:20px;">₹29,999</b></center>
    <b><center>color:</center><b><center>  <form method="post">
      <select name="color">
        <option value="b">black</option>

      </select>
</form></center>
    <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
</div>
<div class="desc1">
<pre> Features<ul><li>Effective Pixels: 18 MP</li><li>Sensor Type: CMOS</li><li>WiFi Available</li></pre>
<pre><p style="font-size:20px;">Specifications</p><u> General</u>
Brand:Canon
Model Number:EOS 1300D
Model Name:EOS 1300D
SLR Variant:(Body with EF-S 18 - 55 mm IS II + EF-S 55 - 250 mm F4 5.6 IS II)
Brand Color:Black
Type:DSLR
Effective Pixels:18 MP
Shooting Modes:Basic Zone Modes: Scene Intelligent Auto, Flash Off,
Creative Auto, Portrait, Landscape, Close-up, Sports,
Food, Night Portrait, Creative Zone Modes: Program AE, Shutter Priority AE,
 Aperture Priority AE, Manual exposure
Tripod Socket:Yes
Face Detection:Yes
Ports:Type C, Mini HDMI
</pre>
</div>
<div class="pro-img2">
  <center><b>Nikon D3300 DSLR Camera D-ZOOM KIT: AF-P 18-55mm VR + AF-P
     DX NIKKOR 70-300mm f/4.5-6.3G ED VR Kit Lenses  (Black)
<b></center>
    <img src="dslr/dslr2.jpg"id="tv2" height="250px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
      <center><b style="font-size:20px;">₹35,410</b></center>
      <b><center>color:</center><b><center>  <form method="post">
        <select name="color">
          <option value="b">black</option>
        </select>
  </form></center>
      <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
  </div>
      <div class="desc2">
        <pre> Features<ul><li>Effective Pixels: 24 MP</li><li>Sensor Type: CMOS</li><li>HD</li></pre>
        <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
          Brand:Nikon
        Model Number:D3300
        Model Name:D3300
        SLR Variant:  D-ZOOM KIT: AF-P 18-55mm VR + AF-P DX NIKKOR 70-300mm
        f/4.5-6.3G ED VR Kit Lenses
        Brand Color:Black
        Effective Pixels:24 MP
        Shooting Modes:Manual
        Tripod Socket:Yes
        Temperature:0DegreeC - 40DegreeC
        Ports:Hi-Speed USB
  </pre>
  </div>
  <div class="pro-img3">
    <center><b>Pentax K 5 II DSLR Camera (Body only)  (Black)<b></center>
      <img src="dslr/dslr3.jpg"id="tv2" height="200px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
        <center><b style="font-size:20px;">₹84,995</b></center>
        <b><center>color:</center><b><center>  <form method="post">
          <select name="color">
            <option value="b">black</option>
            <<option value="g">grey</option>
          </select>
    </form></center>
        <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
    </div>
    <div class="desc3">
      <pre> Features<ul><li>Effective Pixels: 16.3 MP</li><li>Sensor Type: CMOS</li>
    </pre>
      <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
        Brand:Pentax
        Model Number: K 5 II
        SLR Variant:(Body only)
        Brand Color:Black
        Type:DSLR
        Color:Black
        Effective Pixels:16.3 MP
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
