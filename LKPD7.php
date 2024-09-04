<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 7 Kak Fema</title>
</head>
<body>
    <?php
    $NPertama= "Fema Flamelina Putri";
    $NKedua = "Fema Flamelina Putra";

    $String1 = strlen($NPertama);
    $String2 = strlen($NKedua);
    $Total = $String1 - $String2;

    if($NPertama == $NKedua){
        echo "Jumlah karakter pada kedua nama sama";
    }else {
        echo "nama pertama : $NPertama <br>";
        echo "nama kedua : $NKedua <br><br><br>";
        echo "<u>" . $NPertama . "</u> memiliki jumlah karakter lebih banyak dari <u>" . $NKedua . "</u> : selisih <b>" . $Total . "</b> karakter";
    }
    ?>
</body>
</html>