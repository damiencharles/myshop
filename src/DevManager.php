<?php 
require ('connexion.php');

class DevManager 
{
    public static function getDev(){
        $bdd = myshop();
        $dev = $bdd->query('SELECT * FROM dev')->fetchall(PDO::FETCH_OBJ);
        return $dev;
}


}