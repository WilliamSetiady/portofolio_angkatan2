<!-- if: fungsi percabangan dan logika untuk menjalankan kode berdasar kondisi yang dicari -->

<?php

//  OPERATOR PEMBANDING
// = memberi nilai
// == membandingkan
// == membandingkan tapi dengan tipe datanya
// != tidak sama dengan
//empty berarti kosong
// isset = tidak kosong
// > lebih besar, < lebih kecil, >= lebih besar sama dengan, <= lebih kecil sama dengan
$nama = "bambang";

if ($nama == "bambang") {
    echo "Iya";
} else {
    echo "Tidak";
}
echo "<br>";

if (empty($nama)) {
    echo "Salah";
} else {
    echo "Benar";
}
echo "<br>";

if (isset($nama)) {
    echo "Benaar";
} else {
    echo "Salaah";
}
echo "<br>";

$suhu = 35;
if ($suhu > 37) {
    echo "Demam";
} elseif ($suhu >= 35) {
    echo "Normal";
} else {
    echo "Kedinginan";
}



?>