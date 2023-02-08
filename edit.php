<?php
include ("koneksi.php");
if(!isset($_GET['id_peminjam'])){
    header ("Location:lihat_data.php?");
}
$id = $_GET['id_peminjam'];
$sql = "SELECT * FROM tb_peminjam INNER JOIN tb_motor ON tb_peminjam.id_motor = tb_motor.id_motor WHERE tb_peminjam.id_peminjam='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<center>
<body>
<h2>Form Edit</h2>
<a href="lihat_data.php"><input type="button" value="Kembali"></a>
<form action="proses-edit.php" method="POST">
    <p>
    <input type="hidden" name="id_peminjam" value="<?php echo $row['id_peminjam']?>"/>
    </p>
<p>
    <label for="nama_peminjam">Nama Peminjam :</label>
    <input type="text" name="nama_peminjam" value="<?php echo $row['nama_peminjam']?>"/>
</p>
<p>
    <label for="alamat">Alamat :     </label>
    <input type="text" name="alamat" value="<?php echo $row['alamat']?>" />
</p>
<p>
    <label for="umur">Umur :</label>
    <input type="number" name="umur" value="<?php echo $row['umur']?>"/>
</p>
<p>
    <label for="keperluan">Keperluan :</label>
    <input type="text" name="keperluan" value="<?php echo $row['keperluan']?>"/>
</p>
<p>
    <label for="jaminan">Jaminan :</label>
    <input type="text" name="jaminan" value="<?php echo $row['jaminan']?>"/>
</p>
<p>
    <label for="nomor_rangka">Nomor Rangka :</label>
    <input type="number" name="nomor_rangka" value="<?php echo $row['nomor_rangka']?>"/>
</p>
<p>
    <label for="merek">Merek :</label>
    <input type="text" name="merek" value="<?php echo $row['merek']?>"/>
</p>
<p>
    <label for="jenis_motor">Jenis Motor:</label>
    <input type="text" name="jenis_motor" value="<?php echo $row['jenis_motor']?>"/>
</p>
<p>
    <label for="tahun_motor">Tahun Motor :</label>
    <input type="number" name="tahun_motor" value="<?php echo $row['tahun_motor']?>"/> 
</p>
<p>
    <label for="tanggal_pinjam">Tanggal Pinjam :</label>
    <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>"/>
</p>
<p>
    <label for="tanggal_kembali">Tanggal Kembali :</label>
    <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali']?>"/>
</p>
<p>
<input type="submit" name="edit" value="Edit"/>
</p>
</form>
</body>
</center>
</html>