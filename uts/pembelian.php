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
	<form method="post">
		<table>
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><input type="text" name="nama" placeholder="Nama Mobil..."></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="text" name="harga" placeholder="Harga Mobil..."></td>
			</tr>
			<tr>
				<td>Banyaknya</td>
				<td>:</td>
				<td>
					<select name="qty">
						<option value="">- QTY -</option>
						<?php for($x=1;$x<=100;$x++){ ?>
						<option value="<?php echo $x; ?>"><?php echo $x; ?></option>
						<?php } ?>
					</select>
				</td>
			</tr>
            <tr>
				<td>Jumlah Bayar</td>
				<td>:</td>
				<td><input type="text" name="bayar" placeholder="Jumlah Bayar..."></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="hitung" value="Hitung">
					<input type="reset" name="batal" value="Batal">
				</td>
			</tr>
		</table>
	</form>
	<hr>
	<h2>Hasil :</h2>

    <?php
		if(isset($_POST['hitung'])){
			$nama = $_POST['nama'];
			$harga = $_POST['harga'];
			$qty = $_POST['qty'];
            $bayar = $_POST['bayar'];
			$total = $harga*$qty;
            $balik = $bayar-$total;
 
			echo "
				<table border='1'>
					<tr>
						<th>Nama Mobil</th>
						<th>Harga Mobil</th>
						<th>Banyaknya</th>
						<th>Total Harga</th>
                        <th>Jumlah Bayar</th>
                        <th>Total Kembalian</th>
					</tr>
					<tr>
						<td>$nama</td>
						<td>$harga</td>
						<td>$qty</td>
						<td>$total</td>
                        <td>$bayar</td>
                        <td>$balik</td>
					</tr>
				</table>
			"; 
		}
    ?>
</body>
</html>