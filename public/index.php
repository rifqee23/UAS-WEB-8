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
      <?php include "layout/sidebar.php" ?>
      <section class="w-full pt-8 ps-12">
        <h1 class="text-2xl font-semibold">Welcome Admin!</h1>
        <div class="grid grid-cols-4 mt-10 mb-20 gap-x-10">
          <div
            class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl"
          >
            <div>
              <h3 class="font-semibold text-blue-gray-200">Members</h3>
              <h1 class="mt-2 text-2xl font-semibold">555</h1>
            </div>
            <img
              class="w-10 h-10"
              src="asset/icons/members.svg"
              alt="members"
            />
          </div>

          <div
            class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl"
          >
            <div>
              <h3 class="font-semibold text-blue-gray-200">Trainers</h3>
              <h1 class="mt-2 text-2xl font-semibold">20</h1>
            </div>
            <img
              class="w-10 h-10"
              src="asset/icons/members.svg"
              alt="members"
            />
          </div>

          <div
            class="flex items-center justify-between h-32 p-4 bg-white shadow-xl w-96 rounded-xl"
          >
            <div>
              <h3 class="font-semibold text-blue-gray-200">Membership</h3>
              <h1 class="mt-2 text-2xl font-semibold">90</h1>
            </div>
            <img
              class="w-10 h-10"
              src="asset/icons/members.svg"
              alt="members"
            />
          </div>
        </div>

        <?php include "layout/graph.php"; ?>
      </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="js/scripts.js"></script>
    <script src="js/chart.js"></script>
  </body>
</html>
