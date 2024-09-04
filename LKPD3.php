<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 3 Kak Fema</title>
</head>
<body>
    <?php
    for ($AngkaGnjl = 1; $AngkaGnjl <= 11; $AngkaGnjl++) {
        if($AngkaGnjl % 2==1) {
            echo $AngkaGnjl . " x 5 = " . ($AngkaGnjl * 5) . "<br>";  
        }
    }
    ?>
</body>
</html>