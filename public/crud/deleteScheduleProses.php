<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "./../database.php";

$id = $_GET['id'];

// Disable foreign key checks
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=0");

$sql = "DELETE FROM gym_class_schedule WHERE classId='$id'";
$result = mysqli_query($conn, $sql);

// Enable foreign key checks
mysqli_query($conn, "SET FOREIGN_KEY_CHECKS=1");

if ($result) {
    header("Location: ./../schedule.php");
    exit();
} else {
    echo "<script>alert('Gagal Menghapus data');</script>";
}

// Close the database connection
mysqli_close($conn);
