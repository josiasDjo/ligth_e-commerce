<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';  ?>
<?php

    $req = "phone";
    $sql = $bdd -> prepare("SELECT * FROM tproduit WHERE nomCollection = ?");
    $sql -> execute(array($phone));

    $
    $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

?>