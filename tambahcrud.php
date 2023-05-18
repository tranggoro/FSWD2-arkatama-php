<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>
            alert('Login terlebih dahulu!');
            document.location='login.php';
            </script>";
} else {
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootsrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title>Tambah User</title>
        <style>
            table {
                line-height: 30px;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h2>Tambah Pengguna</h2>
            <form action="" method="POST" enctype="multipart/form-data">
                <table align="center">
                    <tr>
                        <td colspan="3">Nama</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="text" class="form-control" name="nama" autocomplete="off"
                                placeholder="Nama Lengkap" required></td>
                    </tr>
                    <tr>
                        <td width="400">Role</td>
                        <td width="50"></td>
                        <td width="400">Email</td>
                    </tr>
                    <tr>
                        <td>
                            <select name="role" class="form-control" required>
                                <option>Pilih role pengguna</option>
                                <option>admin</option>
                                <option>staff</option>
                            </select>
                        </td>
                        <td></td>
                        <td><input type="email" class="form-control" name="email" placeholder="name@example.com" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td></td>
                        <td>Telp</td>
                    </tr>
                    <tr>
                        <td><input type="password" class="form-control" name="password" placeholder="Masukkan password"
                                required></td>
                        <td></td>
                        <td><input type="number" class="form-control" name="tlp" placeholder="Masukkan telepon aktif"
                                required></td>
                    </tr>
                    <tr>
                        <td colspan="3">Alamat lengkap</td>
                    </tr>
                    <tr>
                        <td colspan="3"><textarea name="address" id="" rows="4" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="3">Unggah gambar</td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="file" name="gambar" id="gambar" class="form-control"></td>
                    </tr>
                    <tr>
                        <td colspan="3"><input type="submit" class="btn btn-dark form-control" name="submit" value="Tambah"
                                style="margin-top:20px;"></td>
                    </tr>
                </table>
            </form>
        </div>

        <?php
        include "koneksi.php";

        if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $role = $_POST['role'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $tlp = $_POST['tlp'];
            $address = $_POST['address'];
            $query = mysqli_query($koneksi, "SELECT id FROM users");
            $id = mysqli_num_rows($query);
            $id++;

            $namaFile = $_FILES['gambar']['name'];
            $tmpFile = $_FILES['gambar']['tmp_name'];
            move_uploaded_file($tmpFile, 'gambar/' . $namaFile);

            $insert = mysqli_query($koneksi, "INSERT INTO users VALUES ('$id', '$email', '$nama', '$role', '$namaFile', '$tlp', '$address', '$password', now(), now())");

            if ($insert) {
                echo "<script>
            alert('Pengguna berhasil ditambahkan !');
            document.location='tampil.php';
            </script>";
            } else {
                echo "<script>
            alert('Maaf, terjadi kesalahan saat mencoba tambah pengguna !');
            document.location='tampil.php';
            </script>";
            }
        }
        ?>

    </body>

    </html>
<?php } ?>