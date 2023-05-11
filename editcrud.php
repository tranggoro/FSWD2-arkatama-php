<?php
include "koneksi.php";
$id = $_GET['id'];
$ambil = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$result = mysqli_fetch_array($ambil);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootsrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tambah User</title>
    <style>
        table{
            line-height: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Edit Pengguna</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td colspan="3"><input type="hidden" name="id" value="<?php echo $result['id'] ?>">Nama</td>
                </tr>
                <tr>
                    <td colspan="3"><input type="text" class="form-control" name="nama" autocomplete="off" required value="<?php echo $result['name'] ?>" required></td>
                </tr>
                <tr>
                    <td width="400">Role</td>
                    <td width="50"></td>
                    <td width="400">Email</td>
                </tr>
                <tr>
                    <td>
                        <select name="role" class="form-control" required>
                            <option value="<?php echo $result['role']; ?>"><?php echo $result['role']; ?></option>
                            <option>admin</option>
                            <option>staff</option>
                        </select>
                    </td>
                    <td></td>
                    <td><input type="email" class="form-control" name="email" required value="<?php echo $result['email'] ?>" required></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>Telp</td>
                </tr>
                <tr>
                    <td><input type="password" class="form-control" name="password" required value="<?php echo $result['password'] ?>" required></td>
                    <td></td>
                    <td><input type="number" class="form-control" name="tlp" required value="<?php echo $result['phone'] ?>" required></td>
                </tr>
                <tr>
                    <td colspan="3">Alamat lengkap</td>
                </tr>
                <tr>
                    <td colspan="3"><textarea name="address" id="" rows="4" class="form-control" required><?php echo $result['address'] ?></textarea></td>
                </tr>
                <tr>
                    <td colspan="3">Unggah gambar</td>
                </tr>
                <tr>
                    <td colspan="3"><input type="file" name="gambar" id="gambar" class="form-control"></td>
                </tr>
                <tr>
                    <td colspan="3"><input type="submit" class="btn btn-dark form-control" name="submit" value="Simpan" style="margin-top:20px;"></td>
                </tr>
            </table>
        </form>
    </div>

<?php
include "koneksi.php";

if(isset($_POST['submit'])){
    $namaFile = $_FILES['gambar']['name'];
    $tmpFile = $_FILES['gambar']['tmp_name'];
    move_uploaded_file($tmpFile, 'gambar/' . $namaFile);

    $update = mysqli_query($koneksi, "UPDATE users set
    email = '$_POST[email]',
    `name` = '$_POST[nama]',
    `role` = '$_POST[role]',
    avatar = '$namaFile',
    phone = '$_POST[tlp]',
    `address` = '$_POST[address]',
    `password` = '$_POST[password]' WHERE id = '$_POST[id]'");

    if($update){
        echo "<script>
            alert('Update pengguna berhasil !');
            document.location='tampil.php';
            </script>";
    }
    else {
        echo "<script>
            alert('Maaf, terjadi kesalahan saat mencoba update pengguna !');
            document.location='tampil.php';
            </script>";
    }
  }
?>

</body>
</html>