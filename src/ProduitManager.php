<?php 

class ProduitManager 
{
    public static function getProduits ()
    {
        $con = new PDO('mysql:dbname=myshop;host=127.0.0.1','root');
        $produits = $con->query('SELECT * FROM produit')->fetchAll(PDO::FETCH_ASSOC);
        return $produits;
    }

    public static function getInfoSlip($id)
    {
        $con = new PDO('mysql:dbname=myshop;host=127.0.0.1','root');
        $produits = $con->query('SELECT * FROM produit WHERE id='.$id)->fetch(PDO::FETCH_ASSOC);
        return $produits;
    }

    public static function getCategorie($categorie){
        $bdd = myshop();
        $query_getCategorie = ("SELECT * FROM produit WHERE categorie_produit= '$categorie'");
        $categorie = $bdd->query($query_getCategorie)->fetchAll(PDO::FETCH_ASSOC);
        return $categorie;
    
    }
    
    }