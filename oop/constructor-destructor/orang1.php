<?php
include("orang.php");
$dhika=new Orang(); //instasiasi
$dhika->nama="Rhoma Irama";
$dhika->UcapSalam();

echo "<br>";
$shelly=new Orang(); //instasiasi
$shelly->nama="Iwan Fals";
$shelly->UcapSalam();
?>