<?php
    session_start();

    if(isset($_SESSION['masuk'])){
        header("Location:read.php");
        exit;
    }

    require 'file.php';

    if(isset($_POST['masuk'])){

        $email = $_POST["email"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * from users where email = '$email'");

        // cek email
        if(mysqli_num_rows($result) === 1){
            // cek password
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){

                // set session
                $_SESSION['masuk'] = true;


                header("Location: read.php");
                exit;
            }
        }
    }

    $error =true;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="./css/login.css">

    <!-- cdn Boostrap -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

</head>
<body>

    <div class="container body">
        <h1 class="text-center mt-5 title-login"><span><b>Selamat Datang di Arkatama_Store</b></span></h1>
        <div class="row justify-content-center">
            <div class="card">
                <h4 class="text-center">Masuk ke Akun</h4>
                <p class="center"><b>Sudah punya akun Arkatama_store? Yuk masuk untuk mengakses halaman data pengguna</b></p>

                <form action="login.php" method="post" name="form2">
                    <br>
                    
                    <div class="form-group">
                        <label>Email<span>*</span></label>
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email">
                    </div>
                    <div class="form-group">
                        <label>Password<span>*</span></label>
                         <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="remember">
                        <div class="form-group form-check cek">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
                        </div>
                        <a href="#">Lupa Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit" name="masuk">Masuk</button>
                    <p>Belum punya akun? <a href="daftar.php"><b>Daftar</b></a></p>
                </form>


            </div>
        </div>
    </div>

    <script>
      feather.replace()
    </script>
    
</body>
</html>