<?php 
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'admincheck.php';
    
    $sql = $bdd -> prepare("SELECT * FROM tadmin WHERE email=?");
    $sql -> execute(array($email));
    $total = $sql -> rowCount();
    $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

    // $prenom_bd ="";
    if ($total != 0) { 
        foreach ($resultat as $res) {
            $nom_bd = $res['nom'];
            $prenom_bd = $res['prenom'];

            echo 'Le nom est : ' . $prenom_bd;
        }
    } else {
        echo "Aucun résultat trouvé !";
    }
    echo 'dfjksf' . $email;

?>

<div class="navbarUti">
    <ul>
        <li><a href="../../index.php">Home</a></li>
        <li><a href="">Explore</a></li>
        <li><a href="messages.php">Messages</a></li>
        <li><a href="addNew.php">Add new Articles</a></li>
        <li><a href="settings.php">Settings</a></li>
        <li><a href=""><button> <?php ?> </button></a></li>       
    </ul>
</div>