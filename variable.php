<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nama = $_POST["nama"];
$email = $_POST["email"];
echo "Terima kasih, $nama!<br>";
echo "Email Anda: $email";

}
?>