<?php
session_start();

require_once("dbConfig.php");

try {
    if (isset($_POST["connect-submit"])) {
        $email = htmlspecialchars($_POST["connect-email"]);
        $password = htmlspecialchars($_POST["connect-password"]);

        //On vérifie que tout les champs sont remplis
        if(empty($email) OR empty($password)) {
            $error = "Tout les champs doivent être complétés";
        }
        else {
            $pdo = getPDO("PtutS3_connexion");
                
            $sql = "SELECT * FROM compte WHERE email = ?";
            $result = $pdo->prepare($sql);
            $result->execute(array($email));

            //On vérifie qu'on trouve un résultat (un compte correspondant au mail)
            if ($result->rowCount() != 1) {
                $error = "Votre adresse mail ou votre mot de passe est incorrect";
            }
            else {
                $data = $result->fetch();
                echo '<pre>'; print_r($data); echo '</pre>';
                //On vérifie que le mot de passe correspond bien (algo utilisé : PASSWORD_BCRYPT)
                if (!password_verify($password, $data["HashPassword"])) {
                    $error = "Votre adresse mail ou votre mot de passe est incorrect";
                }
                else {
                    $_SESSION["nom"] = $data["Nom"];
                    $_SESSION["prenom"] = $data["Prenom"];
                    $_SESSION["email"] = $email;
                }
            }
        }
    }
} catch (Exception $e) {
    $error = "Erreur de php : " . $e->getMessage();
}

?>