<?php
include("koneksi.php");
?>
<h3 align="center">Data User</h3>

<table class="table table-bordered table-hover">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Password</th>
        <th>Nama User</th>
        <th>Aksi</th>
    </tr>
<?php
    $no=1;
    $query=("SELECT * FROM user");
    $lihat = mysqli_query($koneksi, $query) or die('Error, query failed. ' . mysqli_error());
    $jml_data=mysqli_num_rows($lihat);
    while($r=mysqli_fetch_array($lihat)){
?>
    <tr>
        <td><?php echo"$no.";?></td>
        <td><?php echo"$r[nidn]";?></td>
        <td><?php echo"$r[password]";?></td>
        <td><?php echo"$r[nama_user]";?></td>

        <td align="center">
            <a href="?halaman=user_detail&id=<?php echo"$r[nidn]";?>" title="Detail Data" class="btn btn-primary btn-sm">Detail</a>
            <a href="?halaman=user_edit&id=<?php echo"$r[nidn]";?>" title="Edit Data" class="btn btn-primary btn-sm">Edit</a>
            <a href="?halaman=user_delete&id=<?php echo"$r[nidn]";?>" title="Hapus Data" class="btn btn-danger btn-sm">Delete</a>
            
    </tr>
<?php 
$no++;
} ?>
</table>
</div>