<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 6 Kak Fema</title>
</head>
<body>
    <?php
    $student = [
        [
        ],
        [
            'nama' => 'Andi',
            'nilai' => [80, 78, 82, 78, 88]
        ],
        [
            'nama' => 'Beni',
            'nilai' => [86, 70, 80, 85, 81]
        ],
        [
            'nama' => 'Dani',
            'nilai' => [83, 91, 70, 73, 81]
        ],      
        [
            'nama' => 'Eko',
            'nilai' => [89, 85, 84, 86, 88]
        ],
    ];

    for ($Angka0 = 1; $Angka0 < count($student); $Angka0++) {
        $nilai = array_sum($student[$Angka0]['nilai']) / count($student[$Angka0]['nilai']);
        echo $Angka0 . ". " . $student[$Angka0]['nama'] . " = " . number_format($nilai, 2) . "<br>"; 
    }
    ?>
</body>
</html>
