<?php
$komentar = $_POST["komentar"];

if (strlen($komentar) <5) {
	echo "komentar harus lebih dari 5 charakter";
	echo "<br><a href='komentar.php'>loginlagi</a>";
}else{
	echo $komentar. "<br><br>";
	echo "panjang komenatar : ". strlen($komentar);
}
?>