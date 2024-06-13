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

        <?php include "layout/trainer/sidebarTrainer.php" ?>
        <section class="w-full p-12">
            <?php include "layout/trainer/tableTrainer.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>
        var keyword = document.getElementById("keyword");

        var container = document.getElementById("container");
        keyword.addEventListener("keyup", function() {
            var xhr_trainer = new XMLHttpRequest();
            //cek kesiapan ajax


            xhr_trainer.onreadystatechange = function() {
                if (xhr_trainer.readyState == 4 && xhr_trainer.status == 200) {
                    container.innerHTML = xhr_trainer.responseText;
                }
            }



            // eksekusi ajax

            xhr_trainer.open("GET", "ajax/trainer.php?keyword=" + keyword.value, true);
            xhr_trainer.send();
        })
    </script>
</body>

</html>