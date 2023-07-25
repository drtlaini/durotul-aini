<?php
include'../koneksi.php';
$id_buku=$_POST['id_buku'];
$judul_buku=$_POST['judul_buku'];
$kategori=$_POST['kategori'];
$pengarang=$_POST['pengarang'];
$penerbit=$_POST['penerbit'];

	
if(isset($_POST['simpan'])){
    // Apabila file berhasil di upload
		move_uploaded_file($lokasi_file,"$folder");
		
	$sql = 
	"INSERT INTO tb_buku
		VALUES('$id_buku','$judul','$kategori','$pengarang','$penerbit')";
	$query = mysqli_query($db, $sql);

	header("location:../index.php?p=buku");
}
?>