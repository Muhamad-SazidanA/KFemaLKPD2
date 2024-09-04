<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD  Kak Fema</title>
</head>
<body>
    <?php
    $data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
    function hitungUsia($data){
        $UmurAnak = 0;
        $UmurDewasa = 0;
        foreach ($data as $value) {
            if ($value < 17){
                $UmurAnak++;
            } else {
                $UmurDewasa++;
            }
        }
        return array("usia anak anak" => $UmurAnak, "usia dewasa" => $UmurDewasa);
    }
    $Umur = hitungUsia($data);

    echo "List Usia : " . implode(", ", $data) . "<br>";
    echo "Jumlah Kategori Dewasa : <b>" . $Umur["usia dewasa"] . "</b><br>";
    echo "Jumlah Kategori Anak-Anak : <b>" . $Umur["usia anak anak"] . "</b><br>";
    ?>
</body>
</html>