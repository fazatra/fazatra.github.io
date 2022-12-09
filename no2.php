<!DOCTYPE html>
<html>
    <head>
    </head>
    <body> 
        <?php
        $lembar = 20;
        $member = "no";
        if($member == "yes"){
            echo ("Harga yang dibayar langganan<br>");
            $harga = 190;
            $harga = $harga * $lembar;
            echo("Total Harga : <b>$harga");
        }else if($member == "no" && $lembar >= 150){
            echo("Harga diskon<br>");
            $harga = 250;
            $harga = $harga * $lembar;
            echo("Total Harga : <b>$harga");
        }else{
            echo("Harga normal<br>");
            $harga = 300;
            $harga = $harga * $lembar;
            echo("Total Harga : <b>$harga");
        }
        ?>
    </body>
</html>