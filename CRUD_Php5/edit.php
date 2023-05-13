<?php
session_start();

if(!isset($_SESSION['masuk'])){
    header("Location:login.php");
    exit;
}
require 'file.php';

if(isset($_POST["submit"])){
    // cek data berhasil ditambahkan?
    if(edit($_POST)>0){
        echo"<script>
        alert('Data berhasil dirubah!);
        document.location.href = 'read.php';
        </script>";
    }
    else{
        echo"<script>
        alert('Data GAGAL dirubah!);
        document.location.href = 'read.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pengguna</title>

    <!-- cdn Boostrap -->

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            text-decoration:none;

        }
        body{
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            width:100%;
            height:100vh;
        }
        .card{
            width:70%;
            height: auto;
            background-color:white;
            margin-top:0.3rem;
            box-shadow: 0px 0px 9px #0A2647;
        }
        .right-content{
            padding:2rem 4%;

        }
        @media(max-width:550px){
            .left-image{
                display:none;
            }
            .card{
                width:90%;
                height:auto;
                margin-top:0.3rem;
            }
        }
    </style>
</head>
<body>
    <?php
    // connect database
    require_once 'connect.php';
    
    // array query
    $array_role = mysqli_query($conn, 'select * from users');

    // ambil
    $id = $_GET['id'];
    $user = mysqli_query($conn, "select * from users where id='$id'");

    while($users_data = mysqli_fetch_array($user)){
        $avatar =$users_data['avatar'];
        $id = $users_data['id'];
        $name = $users_data['name'];
        $email = $users_data['email'];
        $phone = $users_data['phone'];
        $role = $users_data['role'];
    }

    ?>
    <div class="card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 left-image bg-warning justify-content-md-start">
                    <img src="bg.jpg" alt="" width="415px" height="702px">
                </div>
                <div class="col-md-7 right-content">
                    <h2 class="text-center">Edit Anggota</h2>
                    <form action="edit.php?id=<?php echo $id; ?>" method="post" name="form1" enctype="multipart/form-data">
                        <div class="form-group">
                            <label><b>ID</b></label>
                            <input type="text" readonly="" class="form-control" name="id" placeholder="ID Anggota" value="<?=$id?>">
                        </div>
                        <div class="form-group">
                            <label><b>Nama</b></label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" value="<?=$name?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" placeholder="email@example.com" value="<?=$email ?>">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="08XXXXXXXXXX" value="<?=$phone ?>">
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <!-- <input type="text" class="form-control" name="role" placeholder="Pilih Role"> -->
                            <select name="role" class="form-control">
                                <?php
                                while($role = mysqli_fetch_array($array_role)){
                                    echo "<option".($role['role'] == $role ? 'selected':'')." value=".$role['role']." >".$role['role']."</option>";
                                }
                                ?>
                                <!-- <option>admin</option>
                                <option>staff</option> -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formFile" class="form-label"><b>Unggah Foto</b></label>
                            <input class="form-control" type="file" id="gambar" name="gambar" value="<?=$avatar?>">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary" id="btn-submit" name="submit">Tambahkan</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
      feather.replace()
    </script>
</body>
</html>