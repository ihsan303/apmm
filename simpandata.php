<?php

include "koneksi.php";
    $nik= $_POST['nik'];
    $nama= $_POST['nama'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $telp= $_POST['telp'];

    $simpan = "INSERT into masyarakat (nik,nama,username,password,telp)
               VALUES ('$nik','$nama','$username','$password','$telp')";
               
    $result = mysqli_query($conn, $simpan);
    if($result){ //jika simpan berhasil maka muncul pesan dan menuju ke halaman
        echo "<script>alert('Data berhasil disimpan !!!');document.location='index.php'</script>";
    }else{
        echo "<script>alert('Proses simpan gagal, coba kembali');document.location='register.php'</script>";
    }
    
?>