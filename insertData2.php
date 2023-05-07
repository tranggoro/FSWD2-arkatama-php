<?php
function insertDataCategories($id, $name, $created_at, $updated_at)
{
    $koneksi = mysqli_connect("localhost", "root", "", "sinauo");

    $sql = mysqli_query($koneksi, "insert into categories (id, name, created_at, updated_at) values ('$id', '$name', '$created_at', '$updated_at')");

    if ($sql) {
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

insertDataCategories(11, 'Kategori 11', '2024-07-03 09:00:00', '2024-08-03 06:00:00');
?>