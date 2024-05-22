<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'head.php' ; ?>
<body>
    <?php  
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'navbarUti.php';
        require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
    ?>

    <div class="accueil">
        <div id="scrolling-container">
            <ul id="scrolling-content">
                <?php  
                    $sql = $bdd -> prepare("SELECT * FROM tproduit");
                    $sql -> execute();
                    $all = $sql -> rowCount();
                    $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);
                    
                    $compteur = 6;
                    if ($all != 0) {
                        foreach ($resultat as $res) {
                            // while ($compteur < 6) {
                                $image_items_name = $res['image'];
                                echo "  
                                    <li>
                                        <img src=\"src/images/articles/$image_items_name\" alt=\"\">
                                    </li>
                                ";

                                $compteur++;
                            // }
                        }
                    } else {
                        echo "Aucun élément trouvé ! ";
                    }
                ?>
            </ul>
        </div>
    </div>

    <div class="container_accueil">
        <h1>OUR PRODUCTS</h1>
        <div class="container">
            <div class="sub-container">
                <div class="image-show">
                    <img src="src/images/articles/chromeBook 14-1415890289.png" alt="">
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
                    <img src="src/images/articles/iphone 13 pro max-874276815.png" alt="">
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
                    <img src="src/images/articles/jbl airpod-219855130.png" alt="">
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
                    <img src="src/images/articles/samsung s20-1126396635.png" alt="">
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

    <script src="javascript.js"></script>
    <?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ligth_e-commerce' . DIRECTORY_SEPARATOR . 'pages' . DIRECTORY_SEPARATOR . 'footer.php' ?>

</body>
</html>