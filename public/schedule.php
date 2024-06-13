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
        <?php include "layout/schedule/sidebarSchedule.php" ?>
        <section class="w-full p-12">
            <?php include "layout/schedule/tableSchedule.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>
        var keyword_schedule = document.getElementById("keyword_schedule");
        var container_schedule = document.getElementById("container_schedule");

        keyword_schedule.addEventListener("keyup", function() {
            var xhr_schedule = new XMLHttpRequest();


            xhr_schedule.onreadystatechange = function() {
                if (xhr_schedule.readyState == 4 && xhr_schedule.status == 200) {
                    container_schedule.innerHTML = xhr_schedule.responseText;
                }
            }


            xhr_schedule.open("GET", "ajax/schedule.php?keyword=" + keyword_schedule.value, true);
            xhr_schedule.send();
        })
    </script>
</body>

</html>