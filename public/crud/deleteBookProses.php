<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "./../database.php";
$id = $_GET['id'];

$sql = "DELETE FROM gym_booking WHERE bookingId='$id'";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: ./../book.php");
    exit();
} else {
    echo "<script>alert('Gagal Menghapus data');</script>";
}
