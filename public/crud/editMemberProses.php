<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "./../database.php";

if (isset($_POST["submit"])) {

    $id = $_POST["idMember"];
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $date = htmlspecialchars($_POST["tanggal"]);
    $gender = $_POST["gender"];
    $status = $_POST["status"];

    $sql = "UPDATE member SET name='$name', email='$email', phone='$phone', tanggal='$date', gender='$gender', status='$status' WHERE idMember='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("Location: ./../member.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
