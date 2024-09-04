<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 2 Kak Fema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .container {
            width: 500px;
            margin: 6rem auto;
            background-color: #fff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
        }

        p {
            text-align: center;
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Gaji Lembur</h1>
        <form method="post">
            <div class="form-group">
                <label for="JamKerja">Masukan Jam Kerja</label>
                <input type="number" class="form-control" name="JamKerja" id="JamKerja" required>
            </div>
            <div class="form-group d-flex justify-content-between">
                <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
            <?php
            if(isset($_POST['Submit'])) {
                $Jam = $_POST['JamKerja'];
                $KompenLembur = 50000;

                if ($Jam <= 8) {
                    echo "<p style='color: red; font-weight: bold'>Anda tidak lembur</p>";

                } else if($Jam >= 8) {
                    $UangLembur = ($Jam - 9) * 25000;
                    $Total = $UangLembur + $KompenLembur;
                    $TotalJLembur = $Jam-8;
                    echo "<p style='color: green; font-weight: bold'>Lama Jam Kerja : " . $Jam . " Jam </p>";
                    echo "<p style='color: green; font-weight: bold'>Lama Jam Lembur : " . $TotalJLembur . " Jam</p>";
                    echo "<p style='color: green; font-weight: bold'>Uang Kompensasi : Rp. " . number_format($Total) ."</p>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>

