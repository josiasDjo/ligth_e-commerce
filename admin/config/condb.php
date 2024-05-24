<?php
    // $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

    // $server = $url["host"];
    // $username = $url["root"];
    // $password = $url[""];
    // $db = substr($url["path"], 1);


    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $bdd = new PDO("mysql:host=$servername;dbname=light", $username, $password);

        //$bdd = new mysqli($server, $username, $password, $db);
    }
    catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
    // commit hebergement 
    //commit changes
?>