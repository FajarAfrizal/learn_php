<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PANGKAT</title>
</head>
<style>
    label {
        display: block;
    }
</style>
<body>


    <?php
    $H = 1;
    if (isset($_POST['angkaA']) && isset($_POST['pangkat'])) {
        for ($i=0; $i < $_POST ['pangkat']; $i++) { 
            $H *= $_POST['angkaA'];
        }
    }
    ?>
    <form method="POST">
        <label>Angka Aritmatika</label>
        <input type="number" name="angkaA">
        <label>Pangkat</label>
        <input type="pangkat" name="pangkat"><br>
        <input type="submit" name="hitung" value="hitung">
        <input type="reset" value="Reset" name="reset">
    </form>
    <?php
    if ($H > 1) {
        echo $H;
    }
    ?>
</body>
</html>