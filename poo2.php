<?php

// class Formateur{
//     public $nom;

//     function addNom(){
//         return $this-> nom = "BAZZA";
//     }

  
// }

// $formateur = new Formateur();
// echo $formateur->addNom();

class MethodeProprieteStatique{

    public static $nom = "Bazza";

    public static function addNom(){
        //self:: car la propriété de la fonction est dans la même class qu'elle-même   #  de parent::  => fait référence à une classe fille extends de la mère
        return self::$nom = "Ganesh";
    }
}

echo MethodeProprieteStatique::$nom;
echo "<br>";
echo MethodeProprieteStatique::addNom();