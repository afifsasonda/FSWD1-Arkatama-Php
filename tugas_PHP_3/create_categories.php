<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$name = $_POST['name'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];

// Query untuk menambah data
$querycategori = "INSERT INTO categories (id, name, created_at, updated_at) VALUES ('$id', '$name', '$created_at', '$updated_at')";

// Eksekusi query
if (mysqli_query($conn, $querycategori)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>