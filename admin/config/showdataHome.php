<?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
?>

<?php
    // $dossier_items = "../../src/images/articles/";
    // $fichier_items = glob($dossier_items . '*.png');

    // global $show_items;

    // if ($fichier_items !== false && count($fichier_items) > 0) {
    //     $show_items = $fichier_items[array_rand($fichier_items)];
    // } else {
    //     $error = "Aucun fichier trouvé !! ";
    // }  
    


    $sql = $bdd -> prepare("SELECT * FROM tproduit");
    $sql -> execute();
    $total = $sql -> rowCount();
    $resultat_show = $sql -> fetchAll(PDO::FETCH_ASSOC); 

    if ($total != 0) {
        foreach($resultat_show as $res) {
            $nom_P = $res['nom'];
            $prix_P = $res['prix'];
            $descriP = $res['description'];
            $image_P = $res['image'];
            echo "  <div class=\"sub-container\">
                <div class=\"image-show\">
                    <img src=\"../../src/images/articles/$image_P \" alt=\"\">
                </div>
                <div class=\"explore\">
                    <label>$prix_P</label>
                    <p>$descriP</p>
                    <a href=\"#\"><button>Explore</button></a>
                </div>
            </div>";
        }
    } else {
        $error = "Table vide !! ";
    }
?>