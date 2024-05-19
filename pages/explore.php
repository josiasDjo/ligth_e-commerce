<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Document</title>
</head>
<body>
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarUti.php'; ?>

    <div class="container-explore">
        <h2>OUR PRODUCTS</h2>
        <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navEplore.php'; ?>

        <div class="container">
            <?php
                require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'phone.php';
                // require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'watch.php';
                // require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'airpod.php';
                // require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'laptop.php';
            ?>
        </div>
    </div>
    <script src="javascript.js"></script>

</body>
</html>