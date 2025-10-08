<?php
function sapa($nama) {
return "Halo, $nama!";
}
function hitungLuasPersegiPanjang($panjang, $lebar) {
return $panjang * $lebar;
}
echo sapa("Ani") . "<br>";
echo "Luas persegi panjang: " . hitungLuasPersegiPanjang(5,
3) . " cm2";
?>