<?php
$rate = 0.31;

$y = $_POST['yen'];

$baht = $y * $rate;

echo "$y Yen = $baht Baht";
?>