<?php
class Animal{
    public $nama;
    public $umur;
    public $jenisHidup;

    public function setNama($nama){
        $this->nama=$nama;
    }
    public function setJenisHidup($jenisHidup){
        $this->jenisHidup=$jenisHidup;
    }
    public function setUmur($umur){
        $this->umur=$umur;
    }
    public function getCetak(){
        echo "Nama Animal : ".$this->nama."<br>";
        echo "Jenis Hidup : ".$this->jenisHidup."<br>";
        echo "Umur : ".$this->umur." tahun"."<br>";
        echo "<br> ============================== <br>";
    }
}

$gagak = new Animal();
$gagak->setNama("Gagak");
$gagak->setJenisHidup("Udara");
$gagak->setUmur(2);
$gagak->getCetak();

$kuda = new Animal();
$kuda->setNama("juan");
$kuda->setJenisHidup("Darat");
$kuda->setUmur(3);
$kuda->getCetak();