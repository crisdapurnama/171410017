<?php
include'koneksi.php';
$query=("DELETE FROM relasi_prodi
			WHERE id_prodi='$_GET[id]'");
			$lihat = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
			echo "<script>alert('Data Berhasil Dihapus.');</script>";
			echo "<meta http-equiv='refresh' content='1; url=?halaman=relasi_prodi'>";
?>