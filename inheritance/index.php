<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stuju</title>
</head>

<body>
    <?php
    function hr(){
        echo "<hr>";
    }
    class Chef
    {
        function makeChicken()
        {
            echo "The chef makes chicken <br>";
        }
        function makeSalad()
        {
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish()
        {
            echo "The chef makes bb1 ribs <br>";
        }
    }

    class ItalianChef extends Chef //jadi chef yang di atas di copy function nya ke sini trsu di tambah yang baru
    {
        function makePasta()
        {
            echo "The chef makes pasta <br>";
        }
        function makeSpecialDish() // bisa nge overwrite juga coy
        {
            echo "The chef makes chicken parm <br>";
        }
    }
    $chef = new Chef();
    $chef->makeChicken();
    hr();
    $italianChef = new ItalianChef();
    $italianChef->makeChicken();
    ?>
</body>

</html>