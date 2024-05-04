<?php
    // require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
?>

<?php
    $dossier_items = "../../src/images/articles";
    $fichier_items = glob($dossier_items . '/*');

    global $show_items;

    if ($fichier_items !== false && count($fichier_items) > 0) {
        $show_items = $fichier_items[array_rand($show_items)];
    } else {
        $error = "Aucun fichier trouvé !! ";
    }  
    
?>