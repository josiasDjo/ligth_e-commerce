<?php require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php';  ?>
<?php  
    session_start();
?>

<?php
    if (isset($_POST['checkconn'])) {
        $error = "";
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error .= 'Email & password';
        } else {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = $bdd -> prepare("SELECT * FROM tuser WHERE email =?");
            $sql -> execute(array($email));
            $total = $sql -> rowCount();
            $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultat as $res) {
                $password_bd = $res['password'];
            }

            if ($total == 0 ) {
                $error = 'Valeur de connexion incorrectes <br/>';
            } else {
                if ( password_verify($password_bd, $password)) {
                    $_SESSION['user'] = $res;
                    header ("location : index.php");
                } else {
                    $error = 'Mot de passe incorrect<br/>';
                    echo $error;
                }
            }

        }
    }
?>

<?php
    if (isset($_POST['inscris_check'])) {
        if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['name']) || empty($_POST['firstname'])) {
            $error = 'Veillez remplir tout les champs !! ';
        } else {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $name = $_POST['name'];
            $firstname = $_POST['firstname'];

            $sql = $bdd -> prepare("SELECT * FROM tuser WHERE email=?");
            $sql -> execute(array($email));
            $total = $sql -> rowCount();
            $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);
            
            foreach ($resultat as $res) {
                $email_bd = $res['email'];
            }

            if ($total == 0) {
                $sql = $bdd -> prepare("INSERT INTO tuser (nom, prenom, email, password) VALUES (:name, :firstname, :email, :password)");
                $sql -> bindParam(':name', $name);
                $sql -> bindParam(':firstname', $firstname);
                $sql -> bindParam(':email', $email);
                $sql -> bindParam(':password', $password);
                $sql -> execute();

                echo "Inscription terminée";
            } else {
                $error = 'Vous avez déjà un compte à cette adresse email';
            }
        }
    }


?>