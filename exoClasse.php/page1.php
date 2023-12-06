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

    public function afficher_info_template(){
        echo "<table><tr><td>";
        echo " <img src = 'images/$this->img'>";
        echo "</td><td>";
        echo $this->afficher_caracteristiques();                //méthode appelée
        echo "</td></tr></table>";
    }

    function afficher_caracteristiques(){                          //méthode déclarée
        echo "Nom : ".$this->nom."<br>";
        echo "Age : ".$this->age." ans <br>";
        if ($this->sexe) {                                      //condition créée car sexe est true ou false
            echo "Sexe : homme <br>";
        }else {
            echo "Sexe :femme <br>";
        }
        echo "Nom : ".$this->experience." ans <br>";
    }
}  

$perso = new Personnage();
$perso->afficher_info_template()

?>
    
<?php
    include("include/footer.php");
?>