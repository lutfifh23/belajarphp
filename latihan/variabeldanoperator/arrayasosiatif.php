<?php
//array assosiatif sederhana
$alamat = array(
    "naufal"=>"Nepal",
    "meilan"=>"Malaysia",
    "opang"=>"Oman"
);
echo "Alamat opang adalah di ". $alamat['opang'];
echo "<hr>";
/* pilihan lain
$alamat['naufal']="Nepal";
$alamat['meilan']="Malaysia";
$alamat['opang']="Oman";
*/
//array assosiatif perulangan
$alamat = array(
    "naufal"=>"Nepal",
    "meilan"=>"Malaysia",
    "opang"=>"Oman"
);
foreach ($alamat as $x => $value) {
    echo "Alamat " .$x. " di " . $value;
    echo "<br>";
}
?>