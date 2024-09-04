<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 8 Kak Fema</title>
</head>
<body>
    <?php
    $Data = [80, 90, 75, 100, 85, 100, 66];
    $Cari = 100;

    $Jumlah = array_count_values($Data);
    $Hasil = $Jumlah[$Cari];
    echo "Jumlah Angka $Cari =  $Hasil";
    
    ?>
</body>
</html>