<?php require_once dirname(dirname(__DIR__)) .  DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR  . 'config' . DIRECTORY_SEPARATOR . 'condb.php'; ?>

<?php
    $req = "watch";
    $sql = $bdd -> prepare("SELECT * FROM tproduit WHERE nomCollection =?");
    $sql -> execute(array($req));

    $all = $sql -> rowCount();
    $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

    if ($all != 0) {
        foreach($resultat as $res) {
            $nom_items = $res['nom'];
            $description_items = $res['description'];
            $prix_items = $res['prix'];
            $image_items_name = $res['image'];

            echo "
                <div class=\"sub-container\">
                    <div class=\"image-show\">
                        <img src=\"../src/images/articles/$image_items_name\" alt=\"\">
                    </div>
                    <div class=\"explore\">
                        <div class=\"part\">
                            <label>$nom_items</label>
                            <p>$description_items</p>
                        </div>
                        <div class=\"part\">
                            <a href=\"#\"><button>Buy</button></a>
                        </div>
                    </div>
                </div>
            ";
        }
    } else {
        echo "<p class=\"erreur\">Aucun élement trouvé<!! /p>";
    }
?>