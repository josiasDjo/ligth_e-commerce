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
    <?php  
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarUti.php'; 
        require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'admincheck.php';
    ?>

    <div class="conn_container">
        <div class="sub-photo">

        </div>

        <div class="sub-conn">
            <div class="content">
                <h2>Sign in</h2>
                <div class="form-align">
                    <form action="" method="post">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="">
                        <label for="phone">Tel</label>
                        <input type="tel" name="phone" id="">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="">
                        <input type="submit" value="VALIDATE" name="checkSignIn" class="btn-send">
                    </form>
                </div>
                <p> <?php echo $error;  ?> </p>
                <button><a href="connexionAdmin.php"></a></button>
            </div>
        </div>
    </div>
</body>
</html>