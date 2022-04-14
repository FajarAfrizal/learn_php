<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>woi</title>
</head>
<body>
    <h1>belajar php</h1>
    <h3><?php echo "iyahh"; ?></h3>
    <!-- switch case -->
    <h3><?php
        $a = "satu";
        switch ($a) {
            case 'satu':
                echo "satu";
                break;
            case 'dua':
                echo "dua";
                break;
            case 'tiga':
                echo "tiga";
                break;
            default:
                echo "salah";
                break;
        }
    ?></h3>
    <!-- while -->
    <h3><?php
        $i = 1;
        while ($i <= 10) {
            echo "$i <br>";
            $i++;
        }
    ?></h3>
    <!-- for -->
    <h3><?php
        for ($i=1; $i <= 10; $i++) { 
            echo "yea $i <br>";
        }
    ?></h3>
    <!-- foreach -->
    <h3><?php
        $arr = array("satu", "dua", "tiga");
        foreach ($arr as $key => $value) {
            echo "$key $value <br>";
        }
    ?></h3>
    <!-- while do -->
    <h3><?php
        $i = 1;
        do {
            echo "bener $i <br>";
            $i++;
        } while ($i <= 10);
    ?></h3>
</body>
</html>