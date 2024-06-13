<?php
include "database.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['classname'];
    $trainer = $_POST['trainer'];
    $tanggal = $_POST['tanggal'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];

    $sql = "INSERT INTO `gym_class_schedule` (`className`, `trainerId`, `classDate`, `startTime`, `endTime`) VALUES ('$nama', '$trainer', '$tanggal', '$starttime', '$endtime');";
    if ($conn->query($sql) === TRUE) {
        header("Location: schedule.php");
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
        <?php include "layout/schedule/sidebarScheduleAdd.php" ?>
        <section class="flex justify-center w-full p-12">
            <?php include "layout/schedule/formAdd.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>

    </script>
</body>

</html>