<?php
class hello{

    //construc   => méthode magique
    public function __construct()
    {
        echo "Construct is working";                
    }
 
    //method
    public function formateur(){
        echo "Hello Ganesh";
    }
}

$formateur = new hello();           //j'accède au constructeur juste en instanciant la class
echo "<br>";
echo $formateur->formateur();       //à l'inverse, pour utiliser cette fonction, je dois aller la chercher

