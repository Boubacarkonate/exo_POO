<?php
    include("include/head.php");
    include("include/header.php");
?>
    
    
        <h1>POO 1</h1>

<?php
class Personnage{

    public $nom = "Ganesh";
    public $age = 53;
    public $img = "a.PNG";
    public $sexe = true;
    public $experience = 23;

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

$perso1 = new Personnage();
$perso1->afficher_info_template();                        //méthode1 appelée
echo "<br>";

$perso2 = new Personnage();
$perso2->nom ="Sarah";
$perso2->age = 28;
$perso2->sexe = false;
$perso2->experience=8;
$perso2->img="b.PNG";
$perso2->afficher_info_template();

?>
    
<?php
    include("include/footer.php");
?>