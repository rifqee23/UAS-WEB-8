<?php
include "database.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['idSchedule'];
    $nama = $_POST['classname'];
    $trainer = $_POST['trainer'];
    $tanggal = $_POST['tanggal'];
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];

    $sql = "UPDATE `gym_class_schedule` SET `className`='$nama', trainerId='$trainer', classDate='$tanggal', startTime='$starttime', endTime='$endtime' WHERE classId ='$id'";
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
        <?php include "layout/schedule/sidebarScheduleEdit.php" ?>
        <section class="flex justify-center w-full p-12">
            <?php include "layout/schedule/formEdit.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>

    </script>
</body>

</html>