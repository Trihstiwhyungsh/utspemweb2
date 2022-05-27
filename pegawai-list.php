<h3 class="text-center"><b>Daftar Pegawai</b></h3>
<div class="container">
        <div class="card mt-5">
            <div class="card-body shadow" style="margin-auto;">
<a href="index.php?f=pegawai-form&action=create">Tambah Pegawai</a>

<br /><br />
<table class="table table-hover table-success">
<thead>
<tr>
    <th>No</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Action</th>
</tr>
</thead>

<?php
// ambil data pegawai dari database
// kemudian simpan ke array $data
$sql = 'select * from pegawai order by nip';
$rs = mysqli_query($db_conn,$sql);

// lakukan penjagaan, antisipasi error di database
if (!$rs) die ('Query GAGAL: ' . mysqli_error($db_conn));

// mulai proses data
$nomor = 0;
while ($row = mysqli_fetch_assoc($rs)) {
?>
<tr>
    <td><?php print ++$nomor; ?></td>
    <td><?php print $row['nip']; ?></td>
    <td><?php print $row['nama']; ?></td>
    <td><?php print $row['alamat']; ?></td>
    <td>
        &nbsp;<a href="index.php?f=pegawai-view&action=view&id=<?php print $row['id']; ?>" class="btn btn-danger" >View</a>
        &nbsp;<a href="index.php?f=pegawai-form&action=edit&id=<?php print $row['id']; ?>" class="btn btn-warning" >Edit</a>
        &nbsp;<a href="index.php?f=pegawai-view&action=delete&id=<?php print $row['id']; ?>" class="btn btn-danger" >Delete</a>
        &nbsp;
    </td>
</tr>
<?php
} // end while
?>
</table>
