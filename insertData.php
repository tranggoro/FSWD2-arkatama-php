<?php
function insertProduk(
    $id,
    $category_id,
    $name,
    $description,
    $price,
    $status,
    $created_by,
    $created_at,
    $updated_at
) {
    $koneksi = mysqli_connect("localhost", "root", "", "sinauo");
    $sql = mysqli_query($koneksi, "insert into products (id, category_id, name, 
description, price, status, created_by, created_at, updated_at) values ('$id', 
'$category_id', '$name', '$description', '$price', '$status', '$created_by', 
'$created_at', '$updated_at')");
    if ($sql) {
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}
insertProduk(31, 3, 'Produk 31', 'produk baru', 10000, 'accepted', 1, '2023-05-05 
02:00:11', '2023-05-06 00:17');
?>