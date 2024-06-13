<?php
include "database.php";

error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $member = $_POST['member'];
    $class = $_POST['class'];
    $tanggal = $_POST['tanggal'];

    $sql = "INSERT INTO `gym_booking` (`memberId`, `classId`, `bookingDate`) VALUES ('$member', '$class', '$tanggal');";
    if ($conn->query($sql) === TRUE) {
        header("Location: book.php");
        exit();
    } else {
        echo "<div class='p-4 text-white bg-red-500 rounded'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body class="bg-blue-gray-50">
    <div class="flex">
        <?php include "layout/book/sidebarBookAdd.php" ?>
        <section class="flex justify-center w-full p-12">
            <?php include "layout/book/formAdd.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>

    </script>
</body>

</html>