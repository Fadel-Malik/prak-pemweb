<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- 
Nama : Fadel Malik 
NIM : (121140165) 
Kelas : RB / RB (Siakad/Praktikum)

<?php 
// index.php 

// menggunakan fungsi require untuk mengimpor class MusicError
require 'MusicError.php';

try {
    // bagian ini berguna untuk membuat objek dari class MusicError dengan bantuan constructor
    $music1 = new MusicError("Ular berbisa");

    // bagian ini berguna untuk menguji execption dengan memberi argumen invalid dengan sengaja
    $music1 -> setTitle(1010);    
} catch (InvalidArgumentException $e) {
    echo "Kesalahan: ". $e->getMessage() ."<br>";
}
?>
