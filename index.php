<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Tugas</title>
</head>
<body>
<?php
 $nama = "Tri Anggoro";
 $tgl = "12-03-2001";
 $jL = "laki-laki";
 $alamat = "Sidoarjo";
 $riwat = "universitas trunojoyo madura";
 $hobby = "Jogging";
?>

<h1 align="center">Biodata diri</h1>
    
    <table align="center" cellpadding ="10px" width="600px">
        <tr>
            <td>Nama </td>
            <td>: <?php print $Nama; ?> </td>
            <td rowspan="8"><img src="f.jpg" alt="" width="170px" height="200px"></td>
        </tr>
        <tr>
            <td>TTL </td>
            <td>: <?php echo $tgl; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $jL ?></td>
        </tr>
        <tr>
            <td>Alamat Lengkap  </td>
            <td>: <?php echo $alamat ?></td>
        </tr>
        <tr>
            <td>Riwayat Pendidikan </td>
            <td>: <?php echo $riwat ?></td>
        </tr>
        <tr>
            <td>Hobby </td>
            <td>:<?php  echo $hobby ?> </td>
        </tr>
    
    </table>


   


</body>
</html>


