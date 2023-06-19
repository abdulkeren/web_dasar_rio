<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Link Php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tambah Mahasiswa</h1>
    <hr>
    <table>
        <tr>
            <td>NPM</td>
            <td>:<td>
            <td>
                <input type="number" name="npm" id="">
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:<td>
            <td>
                <input type="text" name="nama_mahasiswa">
            </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:<td>
            <td>
                <select type="jk" id="">
                    <option value="">Pilih Jenis Kelamin</option>
                    <option value="lk">Laki-laki</option>
                    <option value="pr">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:<td>
            <td>
                <input type="date" name="tgl_lahir">
            </td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:<td>
            <td>
                <select type="ps" id="">
                    <option value="">Pilih Program Studi</option>
                    <option value="dkv">Desain Komunikasi Visual</option>
                    <option value="pgsd">Pemdidikan Guru Sekolah Dasar</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align:right;">
                <a href="index.php"><button class="btn-kembali">Kembali</button></a>
                <button class="btn-simpan">Simpan</button>
            </td>
        </tr>
    </table>

</body>
</html>