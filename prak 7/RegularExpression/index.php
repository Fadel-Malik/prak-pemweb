<!-- Praktikum Pemrograman Web Minggu 7 -->
<!-- 
Nama : Fadel Malik 
NIM : (121140165) 
Kelas : RB / RB (Siakad/Praktikum)

<?php
// Teks html 
$htmlText = '<p> Apa genre musik favoritmu? <br/> <span style="text-decoration: underline;;"> Indie </span> atau <span style="text-decoration: underline;"> Country </span> ... </p>';

// regex ini berguna untuk mencocokkan tag <span> dengan properti warna
$regex = '/<span style="text-decoration:\s*([^"]+)">/';

// nilai text-decoration yang baru atau yang diinginkan
$newTxtDec = 'overline';

// mengganti text-decoration dalam tag <span> dengan text-decoration baru
$newHTMLText = preg_replace($regex, 'span style="text-decoration : '. $newTxtDec . ';">', $htmlText);

// berguna untuk menampilkan hasil
echo $newHTMLText;
?>