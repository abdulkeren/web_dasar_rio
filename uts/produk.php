<!DOCTYPE html>
<html>
<head>
   <title>UTS Pemrograman Web Desktop</title>
   <link rel="stylesheet" href="style.css">
</head>
<body>
   <nav>
   <ul>
     <li><a href="produk.php">Produk</a></li>
     <li><a href="pembelian.php">Pembelian</a></li>
   </ul>
   </nav>
</body>
<body>
    <?php
    $mobil = array(
        array("FF001","Toyota Supra MK4","Rp 8000","4"),
        array("FF002","Honda Civic Type R","Rp 9000","5"),
        array("FF003","Honda Civic EG","Rp 7000","2")
    );
    //var_dump($mobil);
    //echo $mobil[1][2]
    $jumlah_mobil = count($mobil);
    ?>
    <table border="1" style="border-collapse: collapse; text-align: center;">
        <tr>
            <th>No</th>
            <th>Kode Mobil</th>
            <th>Nama Mobil</th>
            <th>Harga Mobil</th>
            <th>Stok Mobil</th>
        </tr>
        <?php
        for ($i=0; $i < $jumlah_mobil; $i++) { 
        $jumlah_isi_mobil = count($mobil[$i]);
        ?>
        <tr>
            <td><?php echo $i+1; ?></td>
            <?php for($x=0; $x < $jumlah_isi_mobil; $x++) { ?>
            <td><?php echo $mobil[$i][$x]; ?> </td>
            <?php } ?>
        </tr>
        <?php } ?>
    </table>
    </body>
</html>