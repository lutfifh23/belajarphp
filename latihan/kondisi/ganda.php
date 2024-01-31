<?php
//kondisi else
$ukuran = 'XL';
$warna = 'biru';
$biaya = 70000;
if($ukuran=='XL' && $warna=='merah')
{
    $biaya_tambahan = 10000;
    $total_biaya = $biaya+$biaya_tambahan;
    echo "total biaya yang harus dikeluarkan " . $total_biaya;
} else{
    echo "total biaya yang harus dikeluarkan " . $biaya;
}
?> <hr>
<?php
//kondisi true
$tiket = 'Surabaya';
$harga = 300000;
if($tiket=='Surabaya' || $tiket=='Malang')
{
    $harga_potongan = 50000;
    $total_harga = $harga - $harga_potongan;
    echo "total biaya yang harus dikeluarkan " . $total_harga;
} else
{
    echo "total biaya yang harus dikeluarkan " . $harga;
}