<?php
include "database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $idMember = $_POST["idMember"]; 
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $tanggal = $_POST["tanggal"];
  $gender = $_POST["gender"];
  $status = $_POST["status"];
  

  $sql = "UPDATE member SET name='$name', email='$email', phone='$phone', tanggal='$tanggal', gender='$gender', status='$status' WHERE idMember='$idMember'";

  if ($conn->query($sql) === TRUE) {
      
  } else {
      echo "Error updating record: " . $conn->error;
  }
}

$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />

  </head>
  <body class="bg-blue-gray-50">
    <div class="flex">
      <?php include "layout/sidebarMemberEdit.php" ?>
      <section class="flex justify-center w-full p-12">
        <?php include "layout/formEdit.php" ?>
      </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="js/scripts.js"></script>
  </body>
</html>
