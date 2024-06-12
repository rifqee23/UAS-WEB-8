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
        <h1>hello</h1>
        <?php include "layout/trainer/sidebarTrainer.php" ?>
        <section class="w-full p-12">
            <?php include "layout/trainer/tableTrainer.php" ?>
        </section>
    </div>

    <script src="js/index.js"></script>
</body>

</html>