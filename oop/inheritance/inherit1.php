<?php
class Orang{
    protected $nama;
    function __construct($nama){
        $this->nama=$nama;
    }
    function UcapSalam(){
        echo "Hallo. Nama saya adalah ".$this->nama."<br>";
    }
}
?>