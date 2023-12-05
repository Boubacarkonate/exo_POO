<?php

class Formateur{
   
    //properties 
   public $nom = "Ganesh";
   public $age = 52;
   private $salary = 3000;
   protected $taille = 165;

    //methods
    function hello(){
        echo "<h1> Bonjour, quel âge avez-vous ?</h1>";
    }

    

   /**
    * Get the value of salary
    */ 
   public function getSalary()
   {
      return $this->salary;
   }

   /**
    * Set the value of salary
    *
    * @return  self
    */ 
   public function setSalary($salary)
   {
      $this->salary = $salary;

      return $this;
   }
}


class Formateur_g2r extends Formateur{
   public function tailleFormateur(){
      //cette fonction retourne la variable de la classe Parent
      return $this->taille;
   }
}



//instanciation d'un objet provenant de la classe Formateur
$formateur = new Formateur();

//affichage des données souhaitées
echo $formateur->hello();
echo "Monsieur ". $formateur->nom. " à ".$formateur->age;
echo ". Son salaire est de ".$formateur->getSalary(). " par mois <br>";


$formateur->setSalary(4000);
echo ".Non, aujourdh'hui, il gagne ".$formateur->getSalary(). " par mois <br>";

$f1 = new Formateur_g2r();
echo "Il mesure ".$f1->tailleFormateur()." cm";
