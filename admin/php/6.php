<?php
$nama_peserta = "William Setiady";
$nilai = 100;


// function kelulusan($status){
//     if ($status > 70){

//     }
// }
echo "Nama peserta: " . $nama_peserta;
echo "<br>";
echo "Nilai: " . $nilai;
echo "<br>";
if ($nilai >= 90) {
    echo "Grade: A";
} elseif ($nilai >= 80) {
    echo "Grade: B";
} elseif ($nilai >= 70) {
    echo "Grade: C";
} elseif ($nilai > 60) {
    echo "Grade: D";
} else {
    echo "Grade: E";
}

echo "<br>";
if ($nilai > 70) {
    echo "Status: Lulus";
} else {
    echo "Status: Tidak Lulus";
}

//Operator Logika
//AND, &&, OR, ||, !
//AND  1 1 = 1
//OR  1 0 = 1
echo "<br><br>";

$username = "admin";
$password = "admin";

if ($username == "admin" and $password == "admin") {
    echo "Login Berhasil";
} else {
    echo "Login Gagal";
}
