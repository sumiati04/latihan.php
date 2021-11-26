<?php
$gk = 4500000;
$pjk = 112500;
$bpjs = 200000;
$infak = 50000;
$a = 10000;
$b = 24;

$bonus = $a * $b;
$total = $gk - $infak - $pjk + $bonus - $bpjs;

echo "Gk : Rp. $gk";
echo "<br>";
echo "Pjk : Rp. $pjk";
echo "<br>";
echo "Bpjs : Rp. $bpjs";
echo "<br>";
echo "Infak : Rp. $infak";
echo "<br>";
echo "Bonus : Rp. $bonus";
echo "<br>";
echo "Sisa gaji : Rp. $total";
echo "<br>";
