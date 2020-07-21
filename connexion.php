<?php
function myshop(){
        try {
            $bdd = new PDO('mysql:host=localhost; dbname=myshop', 'root');
            return $bdd;
        }
        catch (PDOException $e) {
            echo('echec de la connexion : ' . $e->getMessage());
            exit;
        }  
}