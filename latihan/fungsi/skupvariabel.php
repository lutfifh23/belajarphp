<?php
//contoh variabel berada diluar fungsi *error
/*$nama = "Asep";
function tulispesan(){
    echo "Hallo $nama, apakabar?";
}
tulispesan("Asep");*/
//contoh variabel yang dimasukkan ke dalam fungsi
/*$nama = 'asep';
function tulispesan($nama){
    echo "Halo $nama, apakabar? <br>";
}
tulispesan($nama);*/
//contohh variabel yang dimasukkan ke dalam fungsi menggunakan variabel global
/*$nama = 'asep';
function tulispesan(){
    global $nama;
    echo "Halo $nama, apakabar?";
}
tulispesan($nama);*/
//contoh variabel yang tidak dikenali berada di dalam dan pemanggilan di luar
/*function tulispesan($nama){
    $alamat="Bandung";
    echo "Halo $nama, bagaimana kabarmu di $alamat? <br>";
}
echo $alamat;
$nama = "Asep";
tulispesan($nama);*/
//contoh yang benar
function tulispesan($nama, $alamat){
    echo "Halo $nama, apakabarmu di $alamat?";
}
$nama = "Asep";
$alamat = "Bandung";
tulispesan($nama, $alamat);
?>