<?php

$teks = "Nvidia dikabarkan akan mengurangi produksi kartu grafis lamanya untuk bisa meningkatkan volume produksi lini kartu grafis terbarunya, RTX 3000. Dilansir Techspot, Selasa, hal ini diketahui dari postingan di sebuah forum Board Channel, yang merupakan forum tertutup yang berisi distributor dan direksi rekanan pembuat kartu grafis.Dalam sebuah postingan di forum tersebut diketahui kalau Nvidia mengirimkan pemberitahuan pada perusahaan pembuat kartu grafis kalau mereka akan mengurangi pasokan chip RTX 2060 sampai setengahnya mulai bulan Juni ini.";
$kata   = explode(" ", $teks);
$hasil  = count($kata);
$data   = array_count_values($kata);
echo "<h3>Teks</h3> <br> $teks";
echo "<br>";
echo "<br>1. Hitung berapa kata pada teks diatas<br>";
echo "Jumlah kata: $hasil buah kata <br>";
echo "<br>";

echo "2. Mencari kata tertentu dan hitung kata yang sama <br>";
foreach($data as $i => $x_value) {
    echo $i." ada ".$x_value." kata";
    echo "<br>";
}
echo "<br>3.Urutkan kata-kata dari angka atau huruf a-z<br>";
echo "<br>";
sort($kata);
echo implode(" ",$kata);

?>