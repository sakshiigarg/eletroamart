<?php
session_start();
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
<html>
<head>
  <title>Speakers</title>
</head>
<body>
  <link rel="stylesheet" href="tv.css" type="text/css">
<header>
  <b style="color:white;" id="title">ELECTROMART</style></b>
  <a href="project2.php">HOME</a>
  <a href="project2.php" id="signout">sign out</a>
</header>
<div class="pro-img1">
<center><b>Intex IT-2655 DIGI PLUS Laptop/Desktop Speaker
          (Black, 4.1 Channel)<b></center>
  <img src="speaker/speaker1.jpg" height="200px" width="200px" style="margin-left:50px;margin-top:10px;">
    <center><b style="font-size:20px;">₹2,170</b></center>
    <b><center>color:</center><b><center>  <form method="post">
      <select name="color">
        <option value="b">black</option>
        <<option value="g">grey</option>
      </select>
</form></center>
    <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
</div>
<div class="desc1">
<pre> Features<ul><li>Frequency: Main Unit : 40Hz - 200Hz, Satellite : 200Hz - 20KHz</li>
<li>Power Output: 20W + 10W x 4</li>
<li>Power Source: AC Adapter</li></pre>
<pre>
<p style="font-size:20px;">

  Specifications</p><u> General</u>
Sales Package:4 Speaker, 1 Sub Woofer
Model Name:IT-2655 DIGI PLUS
Type:Laptop/Desktop Speaker
Portable:No
Bluetooth:No
Memory Card Slot:No
Configuration:4.1
Power Source:AC Adapter
Power Output:20W + 10W x 4
Frequency Response:Main Unit : 40Hz - 200Hz, Satellite : 200Hz - 20KHz
Impedance:4 Ω
</pre>
</div>
<div class="pro-img2">
  <center><b>JBL JRX225 Live Sound Passive Speakers<b></center>
    <img src="speaker/speaker2.jpg"id="tv2" height="250px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
      <center><b style="font-size:20px;">₹35,410</b></center>
      <b><center>color:</center><b><center>  <form method="post">
        <select name="color">
          <option value="b">black</option>
          <<option value="g">grey</option>
        </select>
  </form></center>
      <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
  </div>
      <div class="desc2">

        <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
  Power Rating : 500 W / 2000 W, Frequency Range (-10 dB) : 42 Hz - 18 kHz,
  Sensitivity (1w/1m) : 100 dB SPL, Nominal Impedance : 4 ohms,
  Recommended Amplifier Power : 500 W to 1000 W into 4 ohms, Maximum SPL : 133 dB,
  Nominal Dispersion : 90º x 50º, Crossover Frequency : 2.2 kHz
  Frequency Response (±3 dB) : 62 Hz - 13 kHz
  High Frequency Driver : JBL 2414H-C ,
  1" exit compression driver mounted on Progressive Transition Waveguide
  Low Frequency Driver : JBL M115-8A x 2,
  Input Connectors : Neutrik Speakon NL-4 (x1);
  .25 in TS phone jack (x1); parallel, Grille : 18-gauge, powder-coated steel
  </pre>
  </div>
  <div class="pro-img3">
    <center><b>Envent DeeJay 702 BT ET-SP51200-BT Bluetooth Home Audio Speaker
            (Black, 5.1 Channel)<b></center>
      <img src="speaker/speaker3.jpg"id="tv2" height="200px" width="250px" style="margin-left:40px;margin-top:10px;margin-right:20px;">
        <center><b style="font-size:20px;">₹2,763</b></center>
        <b><center>color:</center><b><center>  <form method="post">
          <select name="color">
            <option value="b">black</option>
            <<option value="g">grey</option>
          </select>
    </form></center>
        <center><form method="post"> <input type="submit" name="submit" value="buy"></form>
    </div>
    <div class="desc3">
      <pre> Features<ul><li>Frequency: 20 - 20k Hz</li><li>Power Output: 10W Satellites, 25W Subwoofer</li><li>Power Source: AC Adapter</li><li>Bluetooth</li>
    </pre>
      <pre><p style="font-size:20px;"> Specifications</p><u> General</u>
    Sales Package:1 Woofer, 5 Satellite Speakers, 1 Remote, 2 AAA Batteries, User Manual
    Model Name:DeeJay 702 BT ET-SP51200-BT
    Type:Home Audio Speaker
    Portable:No
    Bluetooth:Yes
    Memory Card Slot:No
    Configuration:5.1
    Power Source:AC Adapter
    Power Output:10W Satellites, 25W Subwoofer
    Frequency Response:20 - 20k Hz
    Impedance:4 Ohm Subwoofer, 8 Ohm Satellite Speakers
</pre>
</div>


</body>
</html>
