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

?>