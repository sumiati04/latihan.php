<?php

$ipk = 3;

if ($ipk > 0 && $ipk <= 2) {
    echo "Grade E, Maaf anda harus mengulang";
} else if ($ipk > 2 && $ipk <= 2.3) {
    echo "Grade D,,Maaf anda harus memperbaiki mata kuliah anda";
} else if ($ipk > 2.3 && $ipk <= 2.6) {
    echo "Grade C,Anda Dapat mengulang untuk memperbaiki nilai dan tidak pun tidak apa";
} else if ($ipk > 2.6 && $ipk <= 3) {
    echo "Grade B, Mata kuliah anda baik";
} else if ($ipk > 3 && $ipk <= 4) {
    echo "Grade A, Mata kuliah anda super";
} else {
    echo "Sistem eror";
}
