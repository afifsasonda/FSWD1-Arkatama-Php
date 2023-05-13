<?php
session_start();

if(!isset($_SESSION['masuk'])){
    header("Location:login.php");
    exit;
}

// connect
require_once 'connect.php';

// ambil
$id = $_GET['id'];

// delete
$delete = mysqli_query($conn, "delete from users where id='$id'");

header("Location:read.php");
?>