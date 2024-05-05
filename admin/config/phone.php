<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';  ?>
<?php

    $req = "phone";
    $sql = $bdd -> prepare("SELECT * FROM tproduit WHERE nomCollection = ?");
    $sql -> execute(array($phone));

    $total = $sql -> rowCount().
    $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

    $error = "";
    if ($total != 0) {
        foreach ($resultat as $res) {
            echo " 
            <div class=\"container\">
                <div class=\"sub-container\">
                    <div class=\"image-show\">
                        <img src=\"../src/images/articles/chromeBook 14-152022452.png\" alt=\"\">
                    </div>
                    <div class=\"explore\">
                        <div class=\"part\">
                            <label>LAPTOP</label>
                        </div>
                        <div class=\"part\">
                            <a href=\"#\"><button>Explore</button></a>
                        </div>
                    </div>
                </div>
            </div>";
        }
    } else {
        $error = "Aucun élement trouvé ! ";
    }

?>