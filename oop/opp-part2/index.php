<?php
class animal{
    public $nama;
    public $jenisHidup;
// Data di satukan
    public function setNama($nama,$jenisHidup){
        $this->nama=$nama;
        $this->jenisHidup=$jenisHidup;
    }
    public function getCetak(){
        echo "Nama Animal: ".$this->nama;
        echo "<br>";
        echo "Jenis Hidup: ".$this->jenisHidup;
    }

}
// ---------------------------------------
$jerapah = new animal();
$jerapah->setNama("Jerapah","Darat");
$jerapah->getCetak();


?>