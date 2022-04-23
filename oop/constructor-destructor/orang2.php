<?php
class Orang{
    private $nama;
    function __consttuct($nama){ // pembuatan constructor
        $this->nama=$nama;
        echo "contructor: $this->nama dilahirkan <br>";
        
    }
    function UcapSalam(){
        echo "Hallo. Nama saya adalah ".$this->nama."<br>";
    }
    function __destruct(){ //pembuatan destructor
        echo "Destructor: $this->nama meninggal dunia<br>";
    }
}

?>