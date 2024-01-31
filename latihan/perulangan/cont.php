<?php
//penggunaan continue
$arr_warna = ['merah','biru','kuning','hitam','hijau','biru','pink','biru','jingga'];
foreach ($arr_warna as $key => $value){
    if ($value=='hitam'){
        continue;
    }
    echo "Array ini urutan ke-$key dengan warna $value <br>";
}
?>