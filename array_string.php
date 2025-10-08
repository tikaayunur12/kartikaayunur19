<?php
// Array
$buah = array("Apel", "Jeruk", "Mangga");
echo "Buah pertama: " . $buah[0] . "<br>";
$siswa = [
"nama" => "Budi",
"umur" => 17,
"kelas" => "XI IPA"
];


echo "Nama siswa: " . $siswa["nama"] . "<br>";
// Manipulasi String
$kalimat = "Belajar PHP itu Menyenangkan";
echo strtoupper($kalimat) . "<br>";
echo strlen($kalimat) . "<br>";
echo str_replace("Menyenangkan", "Seru", $kalimat);