<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array</title>
</head>
<body>
    <h1>Associative Array</h1>
    <ul>
        <li>
            <a href="index.php">Indexed Array</a>
        </li>
        <li>
            <a href="aa.php">Associative Array</a>
        </li>
    </ul>
    <hr>
    <?php
        $laptop = array("Acer" => "Rp.15.000.000","Asus" => "Rp.12.000.000","MSI" => "Rp.50.000.000","Macbook" => "Rp.9.000.000");
        var_dump($laptop);
        //echo $laptop["Acer"];
    ?>
</body>
</html>