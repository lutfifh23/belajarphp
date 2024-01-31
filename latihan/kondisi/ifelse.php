<?php
//penggunaan if sederhana
$nilai = 80;
$wawancara = 'lulus';
$kesehatan = 'tidak';
/*if ($nilai >= 65){
    echo "Selamat Anda Lulus";
};*/
//penggunaan if-else
/*if ($nilai >=65){
    echo "Selamat Anda Lulus, Nilai anda " . $nilai;
}else{
    echo "Mohon Maaf Anda Belum Lulus, Nilai anda " . $nilai;
}*/
//penggunaan if-elseif-else
/*if ($nilai >= 85){
    echo "selamat anda mendapatkan nilai A";
} elseif ($nilai >= 80){
    echo "selamat anda mendapatkan nilai B";
} elseif ($nilai >= 70){
    echo "selamat anda mendapatkan nilai C";
} else {
    echo "selamat anda mendapatkan nilai D";
}*/
if ($nilai >= 80){
    echo "Selamat anda lulus psikotes"."<br>";
    if($wawancara=='lulus'){
        echo "selamat anda lulus wawancara"."<br>";
        if($kesehatan=='lulus'){
            echo "selamat anda layak menjadi karyawan kami";
        }
        else{
            echo "mohon maaf anda tidak layak menjadi karyawan kami";
        }
    } else{
        echo "mohon maaf anda tidak lulus tahap wawancara";
    }
} else{
    echo "mohon maaf anda tidak lulus tahap psikotes";
}
?>