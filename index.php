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
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
    ?>

    <div class="accueil">
        <i class="fa-solid fa-chevron-left"></i>
        <ul>
            <?php  
                $sql = $bdd -> prepare("SELECT * FROM tproduit");
                $sql -> execute();
                $all = $sql -> rowCount();
                $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);
                
                $compteur = 6;
                if ($all != 0) {
                    foreach ($resultat as $res) {
                        while ($compteur < 6) {
                            $image_items_name = $res['image'];
                            echo "  
                                <li>
                                    <img src=\"src/images/articles/$image_items_name\" alt=\"\">
                                </li>
                            ";

                            $compteur++;
                        }
                    }
                } else {
                    echo "Aucun élément trouvé ! ";
                }
            ?>
        </ul>
        <i class="fa-solid fa-chevron-right"></i>
    </div>

    <div class="container_accueil">
        <h1>OUR PRODUCTS</h1>
        <div class="container">
            <?php 
                // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'e-commerce'. DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'showdataHome.php';
            ?>
            <div class="sub-container">
                <div class="image-show">
                    <img src="src/images/articles/chromeBook 14-152022452.png" alt="">
                </div>
                <div class="explore">
                    <div class="part">
                        <label>LAPTOP</label>
                    </div>
                    <div class="part">
                        <a href="#"><button>Explore</button></a>
                    </div>
                </div>
            </div>

            <div class="sub-container">
                <div class="image-show">
                    <img src="src/images/articles/iphone 13 pro max-1690294056.png" alt="">
                </div>
                <div class="explore">
                    <div class="part">
                        <label>PHONE</label>
                    </div>
                    <div class="part">
                        <a href="#"><button>Explore</button></a>
                    </div>
                </div>
            </div>

            <div class="sub-container">
                <div class="image-show">
                    <img src="src/images/articles/jbl airpod-601820217.png" alt="">
                </div>
                <div class="explore">
                    <div class="part">
                        <label>AIRPOD</label>
                    </div>
                    <div class="part">
                        <a href="#"><button>Explore</button></a>
                    </div>
                </div>
            </div>

            <div class="sub-container">
                <div class="image-show">
                    <img src="src/images/articles/samsung-77808960.png" alt="">
                </div>
                <div class="explore">
                    <div class="part">
                        <label>APPLE WATCH</label>
                        <p></p>
                    </div>
                    <div class="part">
                        <a href="#"><button>Explore</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>