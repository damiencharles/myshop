<?php

class ClientManager
{
    public static function getAllClients(){
        $con = new PDO('mysql:dbname=myshop;host=127.0.0.1','root');
        $clients = $con->query('SELECT * FROM client')->fetchAll();
        return $clients;
}

public static function connection($login){
    $con = new PDO('mysql:dbname=myshop;host=127.0.0.1','root');
    $query = "SELECT * FROM client WHERE client.email_client='$login'";
    try {
        $usr = $con->query($query)->fetch(PDO::FETCH_ASSOC);
        return $usr;
    } catch(PDOException $e) {
        $e->getMessage();
        exit;
    }
} 

public static function nouveauClient ($email, $adresse, $passwordCrypt){
    $con = new PDO('mysql:dbname=myshop;host=127.0.0.1','root');
    if ($email !="" && $adresse !="" && $passwordCrypt !="" )
    $query = "INSERT INTO client (email_client, adresse_client, password_client)
    VALUES (:email_client, :adresse_client, :password_client)";
    $stmt = $con->prepare($query);
    $stmt ->execute(array('email_client'=>$email,'adresse_client'=>$adresse, 'password_client'=>$passwordCrypt));
    $res = $stmt->fetchAll();
    return $res;
}
}