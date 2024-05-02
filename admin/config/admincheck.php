<?php require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php'; ?>
<?php session_start(); ?>
<?php 
    if (isset($_POST['addAdmin'])) {
        if (empty($_POST['name']) || empty($_POST['firstname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {
            $error = 'Tout les champs sont requis ! ';
        } else {
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

            $sql = $bdd -> prepare("SELECT * FROM tadmin WHERE email =?");
            $sql -> execute(array($email));

            $total = $sql -> rowCount();
            $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultat as $res) {
                $email_bd = $res['email'];
            }

            if ($total == 0 ) {
                $sql = $bdd -> prepare("INSERT INTO tadmin (nom, prenom, phone, email, password) VALUES (:nom, :prenom, :phone, :email, :password)");
            
                $sql -> bindParam('nom', $name);
                $sql -> bindParam('prenom', $firstname);
                $sql -> bindParam('phone', $phone);
                $sql -> bindParam('email', $email);
                $sql -> bindParam('password', $password);
    
                $sql -> execute();
    
                echo "inscription terminée";
            } else {
                $error = "Un compte est déjà associé à cette email !! ";
                echo $error;
            }   
        }
    } else {
        echo "erreur inconnue !! ";
    }
?>