<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<center>
<body>
<h2>Form Tambah</h2>
<form action="proses-tambah.php" method="POST">
    <form>
<p>
    <label for="nama_peminjam">Nama Peminjam :</label>
    <input type="text" name="nama_peminjam" />
</p>
<p>
    <label for="alamat">Alamat :     </label>
    <textarea name="alamat" row="2"></textarea>
</p>
<p>
    <label for="umur">Umur :</label>
    <input type="number" name="umur" />
</p>
<p>
    <label for="keperluan">Keperluan :</label>
    <input type="text" name="keperluan"/>
</p>
<p>
    <label for="jaminan">Jaminan :</label>
    <input type="text" name="jaminan"/>
</p>
<p>
    <label for="nomor_rangka">Nomor Rangka :</label>
    <input type="number" name="nomor_rangka"/>
</p>
<p>
    <label for="merek">Merek :</label>
    <input type="text" name="merek"/>
</p>
<p>
    <label for="jenis_motor">Jenis Motor:</label>
    <input type="text" name="jenis_motor"/>
</p>
<p>
    <label for="tahun_motor">Tahun Motor :</label>
    <input type="number" name="tahun_motor"/>
</p>
<p>
    <label for="tanggal_pinjam">Tanggal Pinjam :</label>
    <input type="date" name="tanggal_pinjam"/>
</p>
<p>
    <label for="tanggal_kembali">Tanggal Kembali :</label>
    <input type="date" name="tanggal_kembali"/>
</p>
<p>
<input type="submit" name="tambah" value="Tambah"/>
</p>
</form>
</body>
</center>
</html>