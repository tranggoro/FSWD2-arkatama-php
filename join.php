<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384- Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Join</title>
</head>

<body>
    <div class="container">
        <table class="table table-striped table-dark" style="margin-top: 30px;">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Kategori</th>
                </tr>
            </thead>
            <!-- php -->
            <?php
            $koneksi = mysqli_connect("localhost", "root", "", "sinauo");
            $data = mysqli_query($koneksi, "SELECT products.name as name1, products.price as price, products.status as `status`, 
            categories.name as name2 FROM categories join products on categories.id = products.category_id order by products.id");
            $no = 1;
            while ($tampil = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td>
                        <?php echo $no++ ?>
                    </td>
                    <td>
                        <?php echo $tampil['name1'] ?>
                    </td>
                    <td>
                        <?php echo $tampil['price'] ?>
                    </td>
                    <td>
                        <?php echo $tampil['status'] ?>
                    </td>
                    <td>
                        <?php echo $tampil['name2'] ?>
                    </td>
                </tr>
                <?php
            }
            ?>
    </div>
</body>

</html>