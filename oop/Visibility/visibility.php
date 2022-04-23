<?php
class visibility{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';
    function CetakProperti(){
        echo "<br> Pengaksesan dari luar class <br>";
        echo "Public : ".$this->public."<br>";
        echo "Protected : ".$this->public."<br>";
        echo "Private : ".$this->private."<br>";
    }
}

$obj = new Visibility();
$obj->CetakProperti();
echo "<br> Pengaksesan dari luar class <br>";
echo "Public : ".$obj->public."<br>"; // ok
echo "Proctected : ".$obj->protected."<br>"; // error
echo "Private : ".$obj->private."<br>"; // error
?>