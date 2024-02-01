<!--membuat, membaca file-->
<?php
$pesan="Ini hasil membuat file dari php";
file_put_contents("file.txt", $pesan);
$isi_file = file_get_contents("file.txt");
echo $isi_file;
?>