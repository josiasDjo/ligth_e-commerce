<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <?php  
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'e-commerce' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarUti.php';
    ?>

    <div class="accueil">
        <i class="fa-solid fa-chevron-left"></i>
        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="container_accueil">
        <h1>OUR PRODUCTS</h1>
        <div class="container">
            <div class="sub-container">
                <div class="nom">
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="explore">
                    <a href="#"><button>Explore</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>