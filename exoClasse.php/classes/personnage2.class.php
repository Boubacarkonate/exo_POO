<?php

class Personnage2
{
                        ///////////// PROPERTIES //////////////////
    private $nom;
    private $age;
    private $img;
    private $sexe;
    private $experience;

    const HOMME = false;
    const FEMME = false;
                        
                        //////////////// CONSTRUCT ////////////////////

    public function __construct($nom, $age, $img, $sexe, $experience)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->img = $img;
        $this->sexe = $sexe;
        $this->experience = $experience;
    }


                        ///////////////// GETTER / SETTER //////////////////////
     /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getAge(){
       
        return $this->age;
    }

    public function setAge($age){
       
        $this->age = $age;

        return $this;
    }


    public function getImage(){

        return $this->img;
    }

    public function setImage($img){

        $this->img = $img;
        return $this;
    }


    public function getExperience(){

        return $this->experience;
    }

    public function setExperience($experience){

        $this->experience = $experience;
        return $this;
    }


    public function getSexe(){

        return $this->sexe;
    }
                                     ///////////////// TO_STRING //////////////////////

    public function __toString(){
       
        return $this->nom.'<br>'.$this->age.'<br>'.$this->img.'<br>'.$this->sexe.'<br>'.$this->experience;
    }
    

                                         ///////////////// METHODS TEMPLATE //////////////////////


    public function afficher_info_template(){                   //méthode1 déclarée
        echo "<table><tr><td>";
        echo " <img src = 'images/$this->img'>";
        echo "</td><td>";
        echo $this->afficher_caracteristiques();                //méthode2 appelée
        echo "</td></tr></table>";
    }

    function afficher_caracteristiques(){                          //méthode2 déclarée
        echo "Nom : ".$this->nom."<br>";
        echo "Age : ".$this->age." ans <br>";
        if ($this->sexe) {                                      //condition créée car sexe est true ou false
            echo "Sexe : homme <br>";
        }else {
            echo "Sexe :femme <br>";
        }
        echo "Expériences : ".$this->experience." ans <br>";
    }
   
}