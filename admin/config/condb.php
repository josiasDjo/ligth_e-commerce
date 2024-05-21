<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=light", $username, $password);
    }
    catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    // commit hebergement 
    //commit changes
?>