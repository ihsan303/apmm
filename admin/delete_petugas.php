<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn, "DELETE from petugas where id_petugas='$id' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Di Hapus');
        window.location='admin.php?url=lihat_masyarakat';
    </script>
    <?php
}

?>