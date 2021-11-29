<?php
$nama = "Ratna";
$status = "Sekretaris";
$keluarga = 1;
$lembur = 45000;
$lm_lembur = 35;
$trans = 35000;

echo "nama pekerja : " . $nama . "<br>";
echo "status : " . $status . "<br>";

if ($status == "Manager") {
    $gaji = 4500000;
    echo "Gaji pokok : " . $gaji;
} else if ($status == "Sekretaris") {
    $gaji = 3500000;
    echo "Gaji pokok : " . $gaji;
}
echo "<hr>";

$bpjs = $keluarga * 150000;
echo "BPJS : " . $bpjs . "<br>";

$pajak = 0.025 * $gaji;
echo "Pajak : " . $pajak . "<br>";

echo "<hr>";

$total = $bpjs + $pajak;
echo "Total potongan : " . $total . "<br>";

echo "<hr>";

$tunjangan = 0.1 * $gaji;
echo "Tunjangan : " . $tunjangan . "<br>";

$uangLembur = $lembur * $lm_lembur;
echo "Lembur: " . $uangLembur . "<br>";

$transportasi = $trans * 24;
echo "Transportasi : " . $transportasi . "<br>";

echo "<hr>";

$bonus = $tunjangan + $uangLembur + $transportasi;
echo "Bonus : " . $bonus . "<br>";

echo "<hr>";

$gaji_bersih = $gaji - $total + $bonus;
echo "Gaji bersih : " . $gaji_bersih . "<br>";
