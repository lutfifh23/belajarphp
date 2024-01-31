<?php
//break sederhana
$arr_warna = ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
echo "Saya mencari warna hitam <br>";
foreach ($arr_warna as $key => $value){
    echo "Warna pada elemen array ke-$key adalah warna $value<br>";
    if ($value=='hitam'){
        echo "<b>Nah ini warna yang saya cari, dia pada indeks ke-$key<b>";
        break;
    }
}
?>