<?php 
include ('header.php');
include ('connexion.php');
require ('./src/ClientManager.php');


if (isset($_POST) && !empty($_POST)){;
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $password = $_POST['password'];
    $passwordCrypt = password_hash($_POST['password'], PASSWORD_BCRYPT);
    //var_dump($_POST);

    $nouveauClient= ClientManager::nouveauClient($email, $adresse, $passwordCrypt);
    
    header('location:connexion_user.php');

}


include ('./views/inscription_user_view.php');
include ('footer.php');