<?php
$karyawan=[
    ['nama'=>'Naufal','alamat'=>'Ciamis','jenis_kelamin'=>'Laki-laki'],
    ['nama'=>'Winda','alamat'=>'Tasik','jenis_kelamin'=>'Perempuan'],
    ['nama'=>'Abyasa','alamat'=>'Banjar','jenis_kelamin'=>'Laki-laki']
];
?>
<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
            </tr>
            <?php
            foreach($karyawan as $key => $value){
            ?>
            <tr>
                <td><?php echo $value['nama'];?></td>
                <td><?php echo $value['alamat'];?></td>
                <td><?php echo $value['jenis_kelamin'];?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </body>
</html>