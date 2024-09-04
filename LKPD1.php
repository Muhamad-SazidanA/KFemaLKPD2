<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LKPD 1 Kak Fema</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
    <style>
        .container {
            width: 500px;
            margin-top: 6rem;
            background-color: #fff;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-bottom: 2rem;
        }

        p {
            text-align: center;
            margin: 0;
        }
    </style>
<body>
    <div class="container">
        <form method="post">
            <h1 class="text-center">Form</h1>
            <div class="form-group">
                <label for="name">Masukan Teks</label>
                <input type="text" class="form-control" name="Teks" id="Teks" required>
            </div>
            <div class="form-group d-flex justify-content-between">
                <button type="Submit" name="Submit" class="btn btn-primary">Submit</button>
            </div>
            <br>
            <?php
            if(isset($_POST['Submit'])) {
                $Teks = $_POST["Teks"];
        
                $AngkaOnly = filter_var($Teks, FILTER_SANITIZE_NUMBER_INT);
        
                if ($AngkaOnly) {
                    echo "Teks : " . $Teks . "<br>";
                    echo "<b>Teks Mengandung Angka : <b>" . number_format($AngkaOnly);
                } else {
                    echo "Teks : " . $Teks . "<br>";
                    echo "<b>Teks Tidak Mengandung Angka<b>";
                }
            }
            ?>
        </form>
    </div>
</body>
</html>
