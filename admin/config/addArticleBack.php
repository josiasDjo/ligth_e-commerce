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
            $image_items = $_FILES['photo']['name'];
            $image_items_tmp = $_FILES['photo']['tmp_name'];
            $category_items = $_POST['category'];

            if (isset($_FILES['photo']) || ($_FILES['photo']['error']) == UPLOAD_ERR_OK ) { 
                if ($image_items != "") {
                    $ext = pathinfo($image_items, PATHINFO_EXTENSION);
                    $file_names = basename($image_items, '-' . $ext);

                    if ($ext != "jpg" || $ext != "jpeg" || $ext != "png" || $ext != "gif") {
                        $error = "Extension non permi * (\".jpeg, .png, .jpg, .gif\")";
                    } else {
                        $image_name = $nom_items . rand() . $ext;
                        move_uploaded_file($image_items_tmp, '../../src/images/articles' . $image_name);


                        $sql = $bdd -> prepare("INSERT INTO tproduit (:nom, :prix, :description, :image)");
                        $sql -> bindParam(':nom', $nom_items);
                        $sql -> bindParam(':prix', $prix_items);
                        $sql -> bindParam(':description', $description_items);
                        $sql -> bindParam(':image', $image_names);

                        $sql -> execute();

                        echo "Ajout terminé !! ";

                    }
                } else {
                    $error = "Une photo est requis !! ";
                }
            }
        }

    }
?>