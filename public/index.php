<?php

session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
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

<body class="bg-gradient-to-br from-cyan-100 to-cyan-800">
  <div class="flex">
    <?php include "layout/sidebar.php";
    include "database.php";
    $membersResult = $conn->query("SELECT COUNT(*) as count FROM member");
    $membersCount = $membersResult->fetch_assoc()['count'];

    // Query for trainers count
    $trainersResult = $conn->query("SELECT COUNT(*) as count FROM trainer");
    $trainersCount = $trainersResult->fetch_assoc()['count'];

    // Query for booked count
    $bookedResult = $conn->query("SELECT COUNT(*) as count FROM gym_booking");
    $bookedCount = $bookedResult->fetch_assoc()['count'];

    $conn->close();

    ?>
    <section class="w-full pt-8 ps-12">

      <h1 class="text-2xl font-semibold">Welcome Admin!</h1>
      <div class="grid grid-cols-4 mt-10 mb-20 gap-x-10">
        <div class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl">
          <div>
            <h3 class="font-semibold text-blue-gray-200">Members</h3>
            <h1 class="mt-2 text-2xl font-semibold"><?php echo $membersCount; ?></h1>
          </div>
          <img class="w-10 h-10" src="asset/icons/members.svg" alt="members" />
        </div>

        <div class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl">
          <div>
            <h3 class="font-semibold text-blue-gray-200">Trainers</h3>
            <h1 class="mt-2 text-2xl font-semibold"><?php echo $trainersCount; ?></h1>
          </div>
          <img class="w-10 h-10" src="asset/icons/members.svg" alt="members" />
        </div>

        <div class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl">
          <div>
            <h3 class="font-semibold text-blue-gray-200">Booked</h3>
            <h1 class="mt-2 text-2xl font-semibold"><?php echo $bookedCount; ?></h1>
          </div>
          <img class="w-10 h-10" src="asset/icons/members.svg" alt="members" />
        </div>
      </div>

      <?php include "layout/graph.php"; ?>
    </section>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script src="js/index.js"></script>
  <script src="js/chart.js"></script>
</body>

</html>