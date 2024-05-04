<?php 
    require_once dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'admin' . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'condb.php'; 
?>
<?php session_start(); ?>
<?php 

//  ---------- check connexion -------------------
    $error = "";
    $email = "";
    if (isset($_POST['checkSignIn'])) {
        if (empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {
            $error = 'Tout les champs sont requis ! ';
        } else {
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            $sql = $bdd -> prepare("SELECT * FROM tadmin WHERE email =?");
            $sql -> execute(array($email));

            $total = $sql -> rowCount();
            $resultat = $sql -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultat as $res) {
                $email_bd = $res['email'];
            }

            if ($total == 0 ) {
                $error = "Valeurs de connexion incorrectes !! ";
            } else {
                foreach ($resultat as $res) {
                    $password_bd = $res['password'];
                    $phone_bd = $res['phone'];
                }

                if ($phone_bd == $phone) {   
                    if (password_verify($password, $password_bd)) {
                        $_SESSION['admin'] = $res;
                        header("Location: ../pages/messages.php");
                        echo "messages accept ! ";
                        exit();
                    } else {
                        $error = "Numéro incorrect ! ";
                    }
                } else {
                    $error = "Mot de passe incorrect ! ";
                }
            }
        }
    } else {
        // $error = "Erreur inconnue !! ";
    }
?>

<?php
// ----------- check inscription ----------------- 


    if (isset($_POST['addAdminS'])) {
        if (empty($_POST['name']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['password'])) {
            $error = 'Tout les champs sont requis ! ';
        } else {
            $name = $_POST['name'];
            $firstname = $_POST['lastname'];
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
    
                // echo "inscription terminée";
                // header("location : ../../pages/messages.php");

            } else {
                $error = "Un compte est déjà associé à cette email !! ";
            }   
        }
    } else {
        // $error = "Erreur iconnue !! ";
    }
?>