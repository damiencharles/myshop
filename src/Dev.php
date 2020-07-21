<?php

Class Dev 
{
    public $id;
    public $nom;
    public $poste;
    public $photo;
    public $bio;


    public function __construct($nom, $poste, $photo, $bio)
    {
        $this->nom = $nom;
        $this->poste = $poste;
        $this->photo = $photo;
        $this->bio = $bio;
    }

}