<?php
include"koneksi.php";
$query=( "SELECT * FROM relasi_jab_fung WHERE id_jabfung='$_GET[id]'");
$galeri = mysqli_query($koneksi,$query) or die('Error, query failed. ' . mysqli_error());
$m=mysqli_fetch_array($galeri); 
?>

<h3 align="center">Edit Relasi JabFung</h3>
<form class="form-horizontal" method="post" action="?halaman=reljabfung_up" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo"$m[id_jabfung]";?>"/>
    <div class="form-group">
        <label class="col-sm-3 control-label">Nama JabFung : </label>
        <div class="col-sm-4">
        <input type="text" name="nama_jabfung" class="form-control" placeholder="Masukan Nama JabFung" value="<?php echo"$m[nama_jabfung]";?>" required>
        </div>
    </div>  
    <div class="form-group">
        <label class="col-sm-3 control-label">&nbsp;</label>
        <div class="col-sm-6">
        <input type="submit" name="reljabfung_tambah" class="btn btn-sm btn-primary" value="Simpan">
        <a href="?halaman=relasi_jabfung" class="btn btn-sm btn-danger">Batal</a>
        </div>
    </div>
</form>