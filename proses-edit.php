<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
$id=$_POST['id_peminjam'];
$nama_peminjam=$_POST['nama_peminjam'];
$alamat=$_POST['alamat'];
$umur=$_POST['umur'];
$keperluan=$_POST['keperluan'];
$jaminan=$_POST['jaminan'];
$nomor_rangka=$_POST['nomor_rangka'];
$merek=$_POST['merek'];
$jenis_motor=$_POST['jenis_motor'];
$tahun_motor=$_POST['tahun_motor'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$tanggal_kembali=$_POST['tanggal_kembali'];

$sql = "UPDATE tb_peminjam SET nama_peminjam='$nama_peminjam',alamat='$alamat',umur='$umur',keperluan='$keperluan',jaminan='$jaminan' WHERE id_peminjam='$id'";
$query = mysqli_query($koneksi,$sql);

$sql = "UPDATE tb_motor SET nomor_rangka='$nomor_rangka',merek='$merek',jenis_motor='$jenis_motor',tahun_motor='$tahun_motor',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali' WHERE id_motor='$id'"; 
$query = mysqli_query($koneksi,$sql);

if($query){
    header ('location:lihat_data.php?status=sukses');
}else{
    header ('location:lihat_data.php?status=gagal');
}
}
?>
