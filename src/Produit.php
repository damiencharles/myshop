<?php

class Produit 
{
    public $id;
    public $nom;
    public $photo;
    public $descripton;
    public $categorie;
    public $prix;
    public $stock;

    public function __construct($id, $nom, $photo, $description, $categorie, $prix, $stock)
    {
        $this->id = $id;
        $this->nom = $nom;
        $this->photo = $photo;
        $this->description = $description;
        $this->categorie = $categorie;
        $this->prix = $prix;
        $this->stock = $stock;
    }
    
}