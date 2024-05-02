<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <title>Document</title>
</head>
<body>
    <?php 
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarAd.php'; 
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'admincheck.php';
    ?>

    <div class="container-set">
        <div class="sub-part1">
            <ul>
                <?php $childPage = ""; ?>
                <li><button  onclick="<?php $childPage = 1; ?>"> Add Admin</button></li>
                <li onclick="<?php $childPage = 2;  ?>">Delete Articles</li>
                <li onclick="<?php $childPage = 3;  ?>">Language</li>
                <li onclick="<?php $childPage = 4;  ?>">Password and Security</li>
                <li onclick="<?php $childPage = 5;  ?>">Privacy Check</li>
            </ul>
        </div>

        <div class="sub-part2">
            <?php
                // if ($childPage == 1) {
                    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'settings' . DIRECTORY_SEPARATOR . 'addAdmin.php';
                // }
                // else if ($childPage == 2) {
                //     require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'settings' . DIRECTORY_SEPARATOR . 'deleteArticles.php';
                // }
                // else {
                    
                // }
            ?>
        </div>
    </div>
</body>
</html>