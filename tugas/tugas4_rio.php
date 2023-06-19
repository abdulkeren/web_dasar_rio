<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Menghitung Keliling dan Luas Segitigas";
    echo "<hr>";
    
    $alas = 17.25;
    $tinggi = 24.75;
    $sisi_miring = sqrt(($alas * $alas) + ($tinggi * $tinggi));

    echo "Alas segitiga = $alas <br>";
    echo "Tinggi segitiga = $tinggi <br>";

    //echo "<br>";

    //echo "Sisi miring segitigas = ". round($sisi_miring,2) ."<br>";
    //echo "Keliling segitigas = ". round($alas+$tinggi*$sisi_miring,2) ."<br>";
    //echo "Luas segitigas = ". round(1/2 * $alas * $tinggi,2) ."<br>";

    function sisimiring($sisi_miring){
        return $sisi_miring;}
    function keliling($alas,$tinggi,$sisi_miring){
        return $alas+$tinggi*$sisi_miring;}
    function luas($alas,$tinggi){
        return 1/2*$alas*$tinggi;}
    ?>
    <p>Sisi miring segitiga = <?= sisimiring($sisi_miring) ?> </p>
    <p>Keliling segitiga = <?= keliling($alas,$tinggi,$sisi_miring) ?> </p>
    <p>Luas segitiga = <?= luas($alas,$tinggi) ?> </p>
</body>
</html>