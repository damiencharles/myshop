<?php 
include ('header.php');
require ('connexion.php');

require('./src/ClientManager.php');

if (isset($_POST) && !empty($_POST)){
    $login = $_POST['mail'];
    $mdp = $_POST['mdp'];
    $userInfo = ClientManager::connection($login);
    //var_dump($userInfo);
    $mdpCrypt = $userInfo['password_client'];
    $mdpVerif = password_verify($mdp, $mdpCrypt);
    //var_dump($mdpVerif);
    if($mdpVerif)  {
        $_SESSION['usr_id'] = $userInfo['id'];
        $_SESSION['usr_email'] = $userInfo['email_client'];
        //echo "vous êtes connecté";
        header('location:index.php');
        //var_dump($_SESSION);
    } 
    else if ($mdp) {
            $_SESSION['usr_id'] = $userInfo['id'];
            $_SESSION['usr_email'] = $userInfo['email_client'];
            //echo "vous êtes connecté";
            header('location:index.php');
    }
    else {
        echo "aucun utilisateur correspondant";
    }
}


include ('./views/connexion_user_view.php');
include ('footer.php');


