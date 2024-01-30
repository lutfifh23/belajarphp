<?php
//memanggil variabel yang tidak ada
$datadiri = [
    'nama' => "Munaroh",
    'goldarah' => null,
    'alamat' => "Tasikmalaya"
];
echo $datadiri['goldarah'];
//alternative lain
$datadiri = [
    'nama' => "Munaroh",
    'goldarah' => null,
    'alamat' => "Tasikmalaya"
];
echo $datadiri['goldarah'] ?? null;
?>