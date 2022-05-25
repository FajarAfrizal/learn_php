<?php
include("inherit1.php");
// pewarisan tanpa perubahan
class OrangSunda extends Orang{

}
// pewarisan dengan meng-override function UcapSalam
// dan Penambahan method
class OrangInggris extends Orang{
    protected $asal="England"; // penambahan properti baru
    function UcapSalam(){
        echo "Hello. My name is ".$this->nama."<br>";
    }
    function UcapNegara(){ // penambahan method baru
        echo "I'm from ".$this->asal."<br>";

    }
}
$kabayan=new OrangSunda("Kabayan");
$kabayan->UcapSalam();
$william=new OrangInggris("Prince William");
$william->UcapSalam();
$william->UcapNegara();

?>