<?php
$nilai = 75;
if ($nilai >= 90) {
echo "Nilai A";
} elseif ($nilai >= 80) {
echo "Nilai B";
} elseif ($nilai >= 70) {
echo "Nilai C";
} else {
echo "Nilai D";
}
echo "<br>";
$hari = "Senin";
switch ($hari) {



case "Senin":
echo "Hari kerja";
break;
case "Sabtu":
case "Minggu":
echo "Akhir pekan";
break;
default:
echo "Hari biasa";
}
?>