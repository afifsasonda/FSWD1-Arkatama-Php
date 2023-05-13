<?php
require_once 'connect.php';

function create($data){
    global $conn;

    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $phone = htmlspecialchars($data['phone']);
    $role = htmlspecialchars($data['role']);
    
    // $avatar = htmlspecialchars($data['avatar']);

    // upload gambar
    $avatar = upload();
    if(!$avatar){
        return false;
    }

    $insert = mysqli_query($conn, "INSERT into users(avatar,name,email,phone,role) values('$avatar','$name','$email','$phone','$role')");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = htmlspecialchars($data['id']);
    $name = htmlspecialchars($data['name']);
    $email = htmlspecialchars($data['email']);
    $phone = htmlspecialchars($data['phone']);
    $role = htmlspecialchars($data['role']);
    
    // $avatar = htmlspecialchars($data['avatar']);

    // upload gambar
    $avatar = upload();
    // if(!$avatar){
    //     return false;
    // }

    $update = mysqli_query($conn, "UPDATE users SET avatar='$avatar', name='$name', email='$email', phone='$phone', role = '$role' where id = '$id'; ");

    return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek upload harus berupa gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){
        echo "<script>
        alert('Bukan Gambar/Image!');
        </script>";
        return false;
    }

    // cek ukuran
    if($ukuranFile > 1000000){
        echo "<script>
        alert('Ukuran Gambar/Image terlalu besar!');
        </script>";
        return false;
    }

    // true gambar dan upload
    move_uploaded_file($tmpName, 'file/'.$namaFile);

    
    return $namaFile;
}

function daftar($data){
    global $conn;

    $email = strtolower(stripcslashes($data['email']));
    $password = mysqli_real_escape_string($conn, $data['password']);
    $password1 = mysqli_real_escape_string($conn,$data['password1']);

    // cek email sudah ada atau belum
    $hasil = mysqli_query($conn, "select email from users where email = '$email'");

    if(mysqli_fetch_assoc($hasil)){
        echo "<script>
            alert('email sudah terdaftar);
        </script>";

        return false;
    }

    // cek email sudah ada atau tidak
    $result = mysqli_query($conn, "select email from users where email = '$email'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('email yang dipilih sudah terdaftar!);
        </script>";

        return false;
    }

    // cek konfirmasi password
    if($password !== $password1){
        echo "<script>
        alert('password tidak sesuai');
        </script>";

        return false;
    }

    // enkripsi passwor
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah akun user ke database
    mysqli_query($conn, "INSERT INTO users (email, password) values('$email','$password')");

    return mysqli_affected_rows($conn);


}

?>