<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php  require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'navbarUti.php';  ?>

    <div class="conn_container">
        <div class="sub-photo">
            <?php    
                require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'showdataHome.php';          
            ?>
        </div>

        <div class="sub-conn">
            <div class="content">
                <h2>Sign in</h2>
                <div class="form-align">
                    <form action="" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="">
                        <input type="submit" value="VALIDATE" name="checkconn" class="btn-send">
                    </form>
                    <p>you don't have an account <a href="insciption.php">here</a></p>
                </div>
                <a href="../../admin/pages/connexionAdmin.php"><button></button></a>
            </div>
        </div>
    </div>

    <script src="../../javascript.js"></script>
</body>
</html>