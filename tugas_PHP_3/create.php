<?php
// Koneksi ke database
require_once 'koneksi.php';

// Ambil data dari form
$id = $_POST['id'];
$category_id = $_POST['category_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$status = $_POST['status'];
$created_at = $_POST['created_at'];
$updated_at = $_POST['updated_at'];
$created_by = $_POST['created_by'];
$verified_at = $_POST['verified_at'];
$verified_by = $_POST['verified_by'];

// Query untuk menambah data
$query = "INSERT INTO products (id, category_id, name, description, price, status, created_at, updated_at, created_by, verified_at, verified_by) VALUES (
    '$id', '$category_id', '$name', '$description', '$price', '$status',
    '$created_at', '$updated_at', '$created_by', '$verified_at', '$verified_by')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    echo 'Data berhasil ditambahkan';
} else {
    echo 'Error: ' . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>