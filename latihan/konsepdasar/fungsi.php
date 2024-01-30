<!DOCTYPE html>
<html lang="en">
<body>
    <!--implementasi fungsi ucwords/built-in-->
    <?php
    echo ucwords("magang kominfo");
    ?>
    <hr>
    <!--implementasi fungsi strtoupper-->
    <?php
    echo strtoupper("magang kominfo");
    ?>
    <hr>
    <!--implementasi fungsi phpinfo()-->
    <!--
    <?php
    phpinfo();
    ?>-->
    <hr>
    <!--implementasi User Defined Function(UDF)-->
    <?php
    function pesan()
    {
        echo "Selamat datang di kominfo";
    }
    pesan();
    ?>
</body>
</html>