<?php

require 'file.php';

if(isset($_POST['daftar'])){
    if(daftar($_POST) > 0){
        echo "<script>
            alert('Akun Berhasil ditambahkan');
            document.location.href = 'login.php';
        </script>";
    }
    else{
        echo mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reagistrasi</title>

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
                <h4 class="text-center">Daftar Akun</h4>
                <p class="center"><b>Sudah punya akun Arkatama_store? Yuk masuk untuk mengakses halaman data pengguna</b></p>

                <form action="" method="post" name="form2">
                    <br>
                    <div class="form-group">
                        <label>Email<span>*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Masukkan Username">
                    </div>
                    <div class="form-group">
                        <label>Password<span>*</span></label>
                         <input type="password" class="form-control" name="password" placeholder="Masukkan Password">
                    </div>
                    <div class="form-group">
                        <label>Konfirmasi Password<span>*</span></label>
                         <input type="password" class="form-control" name="password1" placeholder="Ulangi Password">
                    </div>
                    <button type="submit" class="btn btn-primary" id="btn-submit" name="daftar">Daftar</button>
                </form>


            </div>
        </div>
    </div>

    <script>
      feather.replace()
    </script>
    
</body>
</html>