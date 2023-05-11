<?php
include "koneksi.php";

if(isset($_GET['id'])){ 
    
    $hapus = mysqli_query($koneksi,"DELETE FROM users WHERE id='$_GET[id]'");

    if($hapus){
        echo "<script>
            alert('Berhasil hapus pengguna !');
            document.location='tampil.php';
            </script>";
    }
    else {
        echo "<script>
            alert('Gagal hapus pengguna !');
            document.location='tampil.php';
            </script>";
    }
}