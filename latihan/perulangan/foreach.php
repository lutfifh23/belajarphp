<?php
//for each hanya menampilkan value saja
$arr_warna = ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
foreach($arr_warna as $value){
    echo "Warna saat ini adalah $value <br>";
}
?> <hr>
<?php
//for each menampilkan key dan value
$arr_warna = ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
foreach($arr_warna as $key => $value){
    echo "Saat ini adalah urutan ke-$key dengan warna $value <br>";
}
?> <hr>
<?php
//for each menampilkan jumlah warna merah
$arr_warna = ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
$warna_merah = 0;
foreach($arr_warna as $key => $value){
    echo "Saat ini adalah urutan ke-$key dengan warna $value <br>";
    if ($value=='merah'){
        $warna_merah++;
    }
}
echo "Jumlah warna merah adalah: $warna_merah <br>";
?> <hr>