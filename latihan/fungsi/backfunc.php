<!--mengembalikan nilai fungsi-->
<?php
function perkalian($x, $y){
    $z = $x * $y;
    return $z;
}
echo "2 * 3 = " . perkalian(2, 3) . "<br>";
?> <hr>
<?php
$alas = 10;
$tinggi = 5;
function luas_segitiga($alas, $tinggi){
    $luas = $alas * $tinggi / 2;
    return $luas;
}
echo "Luas segitiga adalah " . luas_segitiga($alas, $tinggi) . "<br>";
?>