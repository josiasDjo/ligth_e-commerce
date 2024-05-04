<?php
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
?>

<?php
    $error = "";
    if (isset($_POST['envoisArticle'])) {
        if (empty($_POST['nom']) || empty($_POST['prix']) || empty($_POST['category'])) {
            $error = "Tout les champs sont requis ! ";
        } else {
            $nom_items = $_POST['nom'];
            $prix_items = $_POST['prix'];
            $image_items = $_FILES['image'] ['name'];
            $category_items = $_POST['category'];

            if ($image_items != "") {
                $ext = pathinfo($image_items, PATHINFO_EXTENSION);
                $file_names = basename($image_items, '-' . $ext);
            }

            $sql = $bdd -> prepare("INSERT INTO tproduit (:nom, :prix, :description, :image)");
            $sql -> bindParam(':nom', $nom_items);
            $sql -> bindParam(':prix', $prix_items);
            $sql -> bindParam(':description', $description_items);
            $sql -> bindParam(':image', $image_items);
            $sql -> execute();
        }

    }
?>