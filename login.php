<!DOCTYPE html>
<html>
<head>
    <title>LOGIN USER</title>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
              <p class="text-white-50 mb-5">Please enter your login and password!</p>

              <form action="" method="post">
              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeEmailX">Email</label>
                <input type="email" name="email" id="typeEmailX" placeholder="Masukkan email terdaftar" autocomplete="off" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
              <label class="form-label" for="typePasswordX">Password</label>
                <input type="password" name="password" id="typePasswordX" placeholder="Masukkan password" class="form-control form-control-lg" />
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login" value="Login">Login</button>
              </form>

              <div class="d-flex justify-content-center text-center mt-4 pt-1">
                <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>

<?php
error_reporting(0);
include "koneksi.php";

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(empty($_POST['email'])){
        echo "<div class='alert' style='background-color: red;'>Email Harus diisi !</div>";
    }else if(empty($_POST['password'])){
        echo "<div class='alert' style='background-color: red;'>Password Harus diisi !</div>";
    }else{
        echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
    }

    // cek email & pass
    $cek_data = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email' AND `password` = '$pass'");
    $hasil = mysqli_fetch_array($cek_data);
    $login_user = $hasil['email'];
    $row = mysqli_num_rows($cek_data);

    if ($row > 0) {
        session_start();
        $_SESSION['user'] = $login_user;

        header('location: tampil.php');
        
    }else{
        echo "<div class='alert' style='background-color: red;'>Email dan Password tidak sesuai !</div>";
    }
}

?>