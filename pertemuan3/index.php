<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel Dan Function</title>
</head>
<body>
    <?php
        $nama_mahasiswa = "Abdul";
        $prodi = "Sistem Informasi";
    ?>

    <p>
        Nama saya adalah <?= $nama_mahasiswa; ?>, saya adalah mahasiswa UMSU Prodi <?= $prodi; ?>
    </p>
     
    <?php
    $a = 4;
    $b = 19;`

    ?>
    <p>Hasil pemjumlahan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a + $b ?></p>

    <?php
    $a = 4;
    $b = 19;
    ?>
    <p>Hasil pemjumlahan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a - $b ?></p>

    <?php
    $a = 4;
    $b = 19;
    ?>
    <p>Hasil pemjumlahan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a * $b ?></p>

    <?php
    $a = 4;
    $b = 19;
    ?>
    <p>Hasil pemjumlahan dari <?= $a ?> dengan <?= $b ?> adalah <?= $a / $b ?></p>
    

    


</body>
</html>