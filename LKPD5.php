<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 5 Kak Fema</title>
</head>
<body>
    <?php
        $bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
        $bil2 = [77, 99, 55, 81, 45, 90, 91, 98];
        
        $BilanganAda = array_intersect($bil1, $bil2);
        $BilanganTidak = array_diff($bil1, $bil2);

        echo "Bilangan yang ada di kedua Variabel : <br>" . implode(", ", $BilanganAda) . "<br><br>";
        echo "Bilangan yang tidak ada di kedua Variabel : <br>" . implode(", ", $BilanganTidak). "<br>";
    ?>
</body>
</html>