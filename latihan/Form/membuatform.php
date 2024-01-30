<!--submit button-->
<form action="" method="post">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit">
</form>
<!--form menggunakan method get-->
<form action="membuatform.php" method="get">
    Nama: <input type="text" name="nama">
    Alamat: <input type="text" name="alamat"><br><br>
    <input type="submit" value="submit">
</form>
<!--form text-->
<form action="" method="post">
    Nama: <input type="text" name="nama">
    <input type="submit" value="submit">
</form>
<!--form textarea-->
<form action="" method="post">
    Alamat: <textarea name="alamat" cols="30" rows="10"></textarea>
    <br><br>
    <input type="submit" value="submit">
</form>
<!--form password-->
<form action="" method="post">
    Password: <input type="password" name="password">
    <input type="submit" value="submit">
</form>
<!--form tanggal-->
<form action="" method="post">
    Tanggal Lahir: <input type="date" name="tanggal">
    <input type="submit" value="submit">
</form>
<!--form button-->
<form action="" method="post">
    <input type="submit" value="submit" onClick="alert('Hello')">
</form>
<!--form checkbox-->
<form action="" method="post">
    <input type="checkbox" name="PHP" value="PHP"> PHP<br>
    <input type="checkbox" name="HTML" value="HTML"> HTML<br>
    <input type="checkbox" name="Javascript" value="Javascript"> Javascript<br>
</form>
<!--form option-->
<form action="" method="post">
    <select name="program_studi">
        <option value="SI">Sistem Informasi</option>
        <option value="TI">Teknik Informatika</option>
        <option value="MI">Manajemen Informatika</option>
    </select>
</form>
<!--form radio-->
<form action="" method="post">
    <input type="radio" name="Program Studi" value="SI"> Sistem Informasi<br>
    <input type="radio" name="Program Studi" value="TI"> Teknik Informatika<br>
    <input type="radio" name="Program Studi" value="MI"> Manajemen Informasi<br>
</form>
<!--form file-->
<form action="" method="post">
    Pilih file: <input type="file" name="dokumen">
</form>