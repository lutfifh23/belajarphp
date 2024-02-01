<!--menyimpan dalam format serialize dan json-->
<?php
$karyawan=[
    ['nama'=>'asep','alamat'=>'ciamis'],
    ['nama'=>'budi','alamat'=>'tasik'],
    ['nama'=>'cecep','alamat'=>'garut']
];
//echo serialize($karyawan); menampilkan output
$data = serialize($karyawan);
file_put_contents('data.txt', $data); //membuat file serialize
$output = file_get_contents('data.txt');//mengubah serialize ke array
$hasil = unserialize($output);
print_r($hasil);
?> <hr>
<?php
$karyawan=[
    ['nama'=>'asep','alamat'=>'ciamis'],
    ['nama'=>'budi','alamat'=>'tasik'],
    ['nama'=>'cecep','alamat'=>'garut']
];
$data = json_encode($karyawan);
file_put_contents('data1.txt', $data); //membuat file json
$output = file_get_contents('data1.txt');
$hasil = json_decode($output);
print_r($hasil);
?>