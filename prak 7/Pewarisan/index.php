<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- 
Nama : Fadel Malik 
NIM : (121140165) 
Kelas : RB / RB (Siakad/Praktikum)
-->
<?php 
// index.php

//menggunakan require untuk mengimpor class musicPewaris
require 'musicPewaris.php';

// bagian ini berguna untuk membuat objek dari kelas musicPewaris dengan constructor
$music1 = new MusicPewaris("Lucky girl", "Fazerdaze", "Indie", 108000000);

// bagian ini berguna untuk memanggil method infoMusic
$music1->musicInfo();

// bagian ini berguna untuk memanggil method infoMusic yang diwarisi dari kelas musicInherintance
$music1->infoMusic();
?>