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