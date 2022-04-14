<?php
class Mobil{
   public $merk;
   public $nama;
   public $warna;
   public $kecepatan;

   public function inputDataMobil($merk, $nama, $warna, $kecepatan){
       $this->merk=$merk;
       $this->nama=$nama;
       $this->warna=$warna;
       $this->kecepatan=$kecepatan;
   }
   public function getCetak(){
       echo "merk Mobil : ".$this->merk."<br>";
       echo "nama Mobil : ".$this->nama."<br>";
       echo "warna Mobil : ".$this->warna."<br>";
       echo "kecepatan Mobil : ".$this->kecepatan."<br>";
       echo "<br> ==========================================<br>";
   }
   public function getKondisiMobil(){
       if($this->kecepatan > 100){
           echo " kondisi mobil maju <br>";
       }else{
           echo " kondisi mobil mundur <br>";
       }
   }
}

$tesla = new Mobil();
$tesla->inputDataMobil("Toyota", "Fortuner", "Hitam", 300);
$tesla->getKondisiMobil();
$tesla->getCetak();

$honda = new Mobil();
$honda->inputDataMobil("Honda", "Brio", "Hijau", 100);
$honda->getKondisiMobil();
$honda->getCetak();

?>