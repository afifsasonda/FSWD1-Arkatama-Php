<?php
// connect
require_once 'connect.php';

// ambil
$id = $_GET['id'];

// delete
$delete = mysqli_query($conn, "delete from users where id='$id'");

header("Location:read.php");
?>