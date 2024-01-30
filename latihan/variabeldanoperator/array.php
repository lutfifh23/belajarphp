<?php
//array sederhana
$a = array("sapi","ayam","kambing");
echo $a[0];
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
echo "<hr>";
//penulisan array sederhana
$a = ["sapi","ayam","kambing"];
echo $a[0];
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
echo "<hr>";
//penambahan nilai pada array
$a = ["sapi","ayam","kambing"];
$a[] = "kucing";
echo $a[0];
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
echo "<hr>";
//pemanggilan array yang tidak ada nilainya
$a = ["sapi","ayam","kambing"];
$a[] = "kucing";
$a[99] = "anjing";
echo $a[0];
echo $a[10] ?? "";
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
echo "<hr>";
//ingin mengubah nilai 0
$a = ["sapi","ayam","kambing"];
$a[] = "kucing";
$a[99] = "anjing";
$a[0] = "kerbau";
echo $a[0];
echo $a[10] ?? "";
echo "<br>";
print_r($a);
echo "<br>";
var_dump($a);
echo "<hr>";
?>