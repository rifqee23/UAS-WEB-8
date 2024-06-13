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
        <?php include "layout/book/sidebarBook.php" ?>
        <section class="w-full p-12">
            <?php include "layout/book/tableBook.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
    <script>
        var keyword = document.getElementById("keyword");

        var container = document.getElementById("container");

        keyword.addEventListener("keyup", function() {
            var xhr = new XMLHttpRequest();

            //cek kesiapan ajax
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    container.innerHTML = xhr.responseText;
                }
            }
            // eksekusi ajax
            xhr.open("GET", "ajax/member.php?keyword=" + keyword.value, true);
            xhr.send();


        })
    </script>
</body>

</html>