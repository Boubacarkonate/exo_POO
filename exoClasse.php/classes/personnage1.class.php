<?php
class Personnage1
{
    public $nom;
    public $age;
    public $img;
    public $sexe;
    public $experience;

    public function __construct($nom, $age, $img, $sexe, $experience)
    {
        $this->nom = $nom;
        $this->age = $age;
        $this->img = $img;
        $this->sexe = $sexe;
        $this->experience = $experience;
    }

    public function __toString(){
        return $this->nom.'<br>'.$this->age.'<br>'.$this->img.'<br>'.$this->sexe.'<br>'.$this->experience;
    }

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