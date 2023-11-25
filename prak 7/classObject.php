<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- 
Nama : Fadel Malik 
NIM : (121140165) 
Kelas : RB / RB (Siakad/Praktikum)
-->
<?php
// mendefinisikan kelas
class Mobil {
    public $merk;
    public $tahun;
    public $warna;
    public function infomobil(){
        echo "Mobil ".$this->merk. " tahun ".$this->tahun. " berwarna ".$this->warna. " . ";
    }
}

// membuat objek 
$mobil1 = new Mobil();
$mobil1->merk = "Avanza";
$mobil1->tahun = "2020";
$mobil1->warna = "Hitam";

//  memanggil objek class Mobil
$mobil1->infomobil();
?>