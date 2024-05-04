<?php
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';
?>

<?php
    $error = "";
    if (isset($_POST['envoisArticle'])) {
        if (empty($_POST['nom']) || empty($_POST['prix'])) {
            $error = "Tout les champs sont requis ! ";
        } else {
            global $nom_items;
            $nom_items = $_POST['nom'];
            $prix_items = $_POST['prix'];
            $category_items = $_POST['category'];
            $description_items = $_POST['description'];


            if (isset($_FILES['photo']) || ($_FILES['photo']['error']) == UPLOAD_ERR_OK ) { 
                $image_items = $_FILES['photo']['name'];
                $image_items_tmp = $_FILES['photo']['tmp_name'];

                if ($image_items != "") {
                    $ext = pathinfo($image_items, PATHINFO_EXTENSION);
                    $file_names = basename($image_items, '-' . $ext);

                    if ($ext != "jpg" && $ext != "jpeg" && $ext != "png" && $ext != "gif") {
                        $error = "Extension non permi * ('.jpeg, .png, .jpg, .gif')";
                    } else {
                        $image_name = $nom_items . rand() .'.'.$ext;
                        move_uploaded_file($image_items_tmp, '../../src/images/articles/' . $image_name);

                        $dateto_to_day = date("Y-M-D H:i:s");

                        $sql = $bdd -> prepare("INSERT INTO tproduit (nom, prix, description, image, date) VALUES (:nom, :prix, :description, :image, :date)");
                        $sql -> bindParam(':nom', $nom_items);
                        $sql -> bindParam(':prix', $prix_items);
                        $sql -> bindParam(':description', $description_items);
                        $sql -> bindParam(':image', $image_name);
                        $sql -> bindParam(':date', $dateto_to_day);

                        $sql -> execute();

                        $sql_cat = $bdd -> prepare("INSERT INTO tcollection (nom) VALUES (:nom)");
                        $sql_cat -> bindParam(':nom', $category_items);
                        $sql_cat -> execute();
                    }
                } else {
                    $error = "Une photo est requis !! ";
                }
            } else {
                $error = "téléchargement non effectué !";
            }
        }

    }

    echo $nom_items;
?>