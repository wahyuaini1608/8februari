<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel</title>
</head>
<center>
<h2>Data Peminjam Motor</h2>
    <a href = "index.php"><input type = "button" value="Kembali"></a>
    <a href = "tambah.php"><input type = "button" value="Tambah"></a>

<body>
    <table border="1">
    <tr>
    <th>No</th>
    <th>Nama Peminjam</th>
    <th>Alamat</th>
    <th>Umur</th>
    <th>Keperluan</th>
    <th>Jaminan</th>
    <th>Nomor Rangka</th>
    <th>Merek</th>
    <th>Jenis Motor</th>
    <th>Tahun Motor</th>
    <th>Tanggal Pinjam</th>
    <th>Tanggal Kembali</th>
    <th>Aksi</th>
    </tr>
    <?php
    include "koneksi.php";
    $query = mysqli_query ($koneksi, "SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor = tb_motor.id_motor");
    $no = 1;
    foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['nama_peminjam']; ?></td>
        <td><?= $row['alamat']; ?></td>
        <td><?= $row['umur']; ?></td>
        <td><?= $row['keperluan']; ?></td>
        <td><?= $row['jaminan']; ?></td>
        <td><?= $row['nomor_rangka']; ?></td>
        <td><?= $row['merek']; ?></td>
        <td><?= $row['jenis_motor']; ?></td>
        <td><?= $row['tahun_motor']; ?></td>
        <td><?= $row['tanggal_pinjam']; ?></td>
        <td><?= $row['tanggal_kembali'];?></td>
        <td>
            <a href = "edit.php?id_peminjam=<?=$row['id_peminjam'];?>">Edit</a>||
            <a href = "hapus.php?id_peminjam=<?=$row['id_peminjam'];?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
</body>
</center>
</html>