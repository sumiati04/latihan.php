<?php

if (isset($_POST['save'])) {
    $nama = $_POST['nama'];
    $tb = $_POST['tb'];
    $bb = $_POST['bb'];
    $jk = $_POST['jk'];
}
if ($jk == "Laki-laki") {
    if ($tb < 170) {
        $data == "Tidak diterima";
    } else if ($tb > 170) {
        $data == "Diterima";
    }
} else if ($jk == "Perempuan") {
    if ($tb < 160) {
        $data == "Tidak diterima";
    } else if ($tb > 160) {
        $data == "Diterima";
    }
}
if ($jk == "Laki-laki") {
    if ($bb > 90) {
        $data == "Tidak diterima";
    } else if ($bb < 90) {
        $data == "Diterima";
    }
}
