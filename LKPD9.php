<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 9 Kak Fema</title>
</head>
<body>
    <?php
    function pecahanLembar($uang){
        $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500);
        $jumlah = array();
        foreach ($pecahan as $value) {
            $jumlah[$value] = floor($uang / $value);
            $uang = $uang % $value;
        }
        return $jumlah;
    }
    
    $uang = 175500;
    $hasil = pecahanLembar($uang);

    echo "Uang : Rp. " . number_format($uang, 0, ',', '.') . "<br>";
    echo "Lembar Rupiah : <br><br>";
    foreach ($hasil as $value => $jumlah) {
        if ($jumlah > 0) {
            echo "Rp. " . number_format($value, 0, ',', '.') . " : $jumlah <br>";
        }   
    }
    ?>
</body>
</html>