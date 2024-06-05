<?php
// Sertakan file koneksi database
include "database.php";

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
  <body class="bg-blue-gray-50">
    <div class="flex">
      <?php include "layout/sidebarMemberAdd.php" ?>
      <section class="flex justify-center w-full p-12">
        <?php include "layout/formAdd.php" ?>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="js/scripts.js"></script>
  </body>
</html>
