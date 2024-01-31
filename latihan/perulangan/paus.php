<?php
//while sederhana
$x=1;
while ($x <= 15){
    echo "Nomor antrian yang tersedia: $x <br>";
    $x++;
}
?> <hr>
<?php
//array w/ while
$arr_warna = ['merah','biru','kuning','merah','hijau','biru','merah','biru','kuning','merah','hijau','biru'];
$jumlah = 0;
$i = 0;
while($i<=11)
{
    if($arr_warna[$i]=='merah'){
        $jumlah++;
    }
    $i++;
}
echo "Jumlah warna merah " . $jumlah;
?> <hr>
<?php
//do..while
$x = 1;
do{
    echo "Nomor antrian yang tersedia adalah: $x <br>";
    $x++;
}
while ($x <= 15);
?>