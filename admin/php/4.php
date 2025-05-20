<!-- Function
 1. function yang dibuat sendiri
 2. function bawaan ie. strlen(), in_array() -->

<?php
//Jika sudah echo di dalam function, tidak diperlukan echo lagi untuk pemanggilan function
function callName()
{
    echo "Nama saya William";
    echo "<br>";
}
callName();

function callNamelagi()
{
    return "Nama saya Set";
}
echo callNamelagi();

function perkalian($angka1, $angka2)
{
    /*  $angka1 = 15;
    $angka2 = 31; */
    $kali = $angka1 * $angka2;
    return $kali;
}
echo "<br>";
echo perkalian(30, 50);
echo "<br>";
echo perkalian(30, 75);
