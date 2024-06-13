<?php
// Sertakan file koneksi database
include "database.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Memproses data form jika form telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Ambil data dari form
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $tanggal = $_POST['tanggal'];
  $gender = $_POST['gender'];
  $status = $_POST['status'];

  // Query untuk menyimpan data ke dalam database
  $sql = "INSERT INTO member (name, email, phone, tanggal, gender, status) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssss", $name, $email, $phone, $tanggal, $gender, $status);
  $stmt->execute();
  $stmt->close();

  // Redirect ke halaman lain atau tampilkan pesan sukses
  header("Location: member.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Member</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

</head>

<body class="bg-gradient-to-br from-cyan-100 to-cyan-800">
  <div class="flex">
    <?php include "layout/sidebarMemberAdd.php" ?>
    <section class="flex justify-center w-full p-12">
      <?php include "layout/formAdd.php" ?>
    </section>
  </div>

  <script src="js/index.js"></script>


  <script>
    const datepicker = flatpickr("#date-picker", {});

    // styling the date picker
    const calendarContainer = datepicker.calendarContainer;
    const calendarMonthNav = datepicker.monthNav;
    const calendarNextMonthNav = datepicker.nextMonthNav;
    const calendarPrevMonthNav = datepicker.prevMonthNav;
    const calendarDaysContainer = datepicker.daysContainer;

    calendarContainer.className = `${calendarContainer.className} bg-white p-4 border border-blue-gray-50 rounded-lg shadow-lg shadow-blue-gray-500/10 font-sans text-sm font-normal text-blue-gray-500 focus:outline-none break-words whitespace-normal`;

    calendarMonthNav.className = `${calendarMonthNav.className} flex items-center justify-between mb-4 [&>div.flatpickr-month]:-translate-y-3`;

    calendarNextMonthNav.className = `${calendarNextMonthNav.className} absolute !top-2.5 !right-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;

    calendarPrevMonthNav.className = `${calendarPrevMonthNav.className} absolute !top-2.5 !left-1.5 h-6 w-6 bg-transparent hover:bg-blue-gray-50 !p-1 rounded-md transition-colors duration-300`;

    calendarDaysContainer.className = `${calendarDaysContainer.className} [&_span.flatpickr-day]:!rounded-md [&_span.flatpickr-day.selected]:!bg-gray-900 [&_span.flatpickr-day.selected]:!border-gray-900`;
  </script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</body>

</html>