<!--sintaks biasanya-->

<?php
$nama = "Lutfi";
?>
<!DOCTYPE html>
<html>
<body>
    <h1>Selamat Datang <?php echo $nama;?></h1>
</body>
</html>
<hr>
<!--penggunaan GET-->
<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
?>
<!DOCTYPE html>
<html>
<body>
    <form action="querystring.php" method="get">
        Nama: <input type="text" name="nama">
        Alamat: <input type="text" name="alamat">
        <input type="submit" name="submit">
    </form>
    <h1>Selamat Datang <?php echo $nama;?></h1>
    <h2>Kamu tinggal di <?php echo $alamat;?></h2>
</body>
</html>