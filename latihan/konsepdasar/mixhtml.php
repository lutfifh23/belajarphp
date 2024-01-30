<?php
// sintaks php + html
$nama = "Lutfi Farhan Hakim";
$alamat = "Ciamis";
$gol = "AB";
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mix html php</title>
</head>
<body>
    <h1>Selamat datang di php, <?php echo $nama; ?></h1>
    <h2>Alamat: <?php echo $alamat; ?></h2>
    <h3>Golongan Darah: <?php echo $gol; ?></h3>
</body>
</html>


<?php
//memasukkan sintaks html pada sintaks php
$nama = "<h1> Lutfi Farhan Hakim </h1>";
$alamat = "<h2> Ciamis </h2>";

echo $nama;
echo $alamat;
?>