<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Penggolongan Usia</h2>
            <?php
            $usia = 40.00;
            $kategori = "";
            if ($usia <= 5.00) {
                $kategori = "Balita";
                echo "umur $usia, Adalah $kategori";
            } else if ($usia >= 5.00 && $usia <= 15.00) {
                $kategori = "Kanak - Kanak";
                echo "umur $usia, Adalah $kategori";
            } else if ($usia >= 15.00 && $usia <= 25.00) {
                $kategori = "Remaja";
                echo "umur $usia, Adalah $kategori";
            } else if ($usia >= 25.00 && $usia <= 60.00) {
                $kategori = "Dewasa";
                echo "umur $usia, Adalah $kategori";
            } else if ($usia >= 60.00) {
                $kategori = "Lansia";
                echo "umur $usia, Adalah $kategori";
            } else {
                echo "umur $usia, Tidak dapat didefinisikan !!!";
            }
            ?>
    </body>
</html>