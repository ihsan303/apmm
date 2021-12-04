<?php
require '../koneksi.php';
$nik=$_GET['nik'];

$sql=mysqli_query($conn, "DELETE from petugas where nik='$nik' ");

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