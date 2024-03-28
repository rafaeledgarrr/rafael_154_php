<html>
<head>
    <title>Kalkulator Luas Persegi Panjang</title>
    <link rel="stylesheet" type="text/css" href="stylepersegi.css">
</head>
<body>
<div class="container">
    <h3>KALKULATOR LUAS PERSEGI PANJANG</h3>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="input-group">
            <label>Panjang:</label>
            <input type="text" name="panjang" class="input-field">
        </div>
        <div class="input-group">
            <label>Lebar:</label>
            <input type="text" name="lebar" class="input-field">
        </div>
        <input type="submit" name="submit" value="Hitung" class="btn">
    </form>

    <div class="output-container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $panjang = $_POST['panjang'];
            $lebar = $_POST['lebar'];

            if (is_numeric($panjang) && is_numeric($lebar)) {
                $luas = $panjang * $lebar;
                echo "<h3 class='result-header'>Hasil:</h3>";
                echo "<p class='result-text'>Luas Persegi Panjang: $luas cm<sup>2</sup></p>";
            } else {
                echo "<h3 class='error'>MASUKKAN ANGKA DENGAN BENAR!</h3>";
            }
        }
        ?>
    </div>
</div>
</body>
</html>
