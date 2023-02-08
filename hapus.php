<?php
include ("koneksi.php");
$id = $_GET['id_peminjam'];

$sql = "DELETE FROM tb_motor WHERE id_motor='$id'";
$query = mysqli_query($koneksi,$sql);

$sql = "DELETE FROM tb_peminjam WHERE id_peminjam='$id'";
$query = mysqli_query($koneksi,$sql);

if($query){
    header ('location:lihat_data.php?status=sukses');
}else{
    header ('location:lihat_data.php?status=gagal');
}
?>