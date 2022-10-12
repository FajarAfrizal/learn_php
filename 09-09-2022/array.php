
<?php
$judul = [
    "miracle in cell no.7",
    "the invitation",
    "luck"
];
$listfilm = [
    [
        "judul" => "miracle in cell no.7",
        "min-usia" => 15,
        "harga" => 45000
    ],
    [
        "judul" => "the invitation",
        "min-usia" => 17,
        "harga" => 35.000
    ],
    [
        "judul" => "luck",
        "min-usia" => 7,
        "harga" =>3500
    ]
];
 if (isset($_POST['judul']) && ($_POST['min-usia']) && ($_POST['harga'])) {
    if ($_POST['min-usia']){

    }
 }
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form method="post">
        <label>usia anda</label>
        <input type="number" name="min-usia"><br>
        <label>judul</label>
        <select>
            <option value=""></option>
            <?php
            
                echo '<option value="">'.$listfilm[0]['judul'].'</option>';
            
            ?>
        </select><br>
        <input type="submit">
    </form>
 </body>
 </html>
 <?php
 
 ?>