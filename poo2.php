<?php

class Formateur{
    public $nom;

    function addNom(){
        return $this-> nom = "BAZZA";
    }
}


$formateur = new Formateur();
echo $formateur->addNom();