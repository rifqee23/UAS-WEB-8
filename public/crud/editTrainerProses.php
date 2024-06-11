<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include "./../database.php";

if (isset($_POST["submit"])) {

    $id = $_POST["trainerId"];
    $name = htmlspecialchars($_POST['name']);
    $specialization = htmlspecialchars($_POST['specialization']);
    $sertification = htmlspecialchars($_POST['sertification']);
    $experience = htmlspecialchars($_POST['experience']);
    $contact = htmlspecialchars($_POST['contact']);

    $sql = "UPDATE trainer SET nama='$name', spesialisasi='$specialization', sertifikasi='$sertification', pengalaman='$experience', kontak='$contact' WHERE trainerId='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {

        header("Location: ./../trainer.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
