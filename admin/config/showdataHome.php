<?php
    require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
?>

<?php
$sql = $bdd->prepare("SELECT * FROM tproduit");
$sql->execute();
$all = $sql->rowCount();
$resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

$compteur = 6;
if ($all != 0) {
    foreach ($resultat as $res) {
        // while ($compteur < 6) {
        $image_items_name = $res['image'];
        echo "  
            <li>
                <img src=\"../../src/images/articles/$image_items_name\" alt=\"\">
            </li>
        ";

        $compteur++;
        // }
    }
} else {
    echo "Aucun élément trouvé ! ";
}
?>