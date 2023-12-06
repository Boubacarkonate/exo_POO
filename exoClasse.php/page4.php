<?php
include("include/head.php");
include("include/header.php");
?>


<h1>POO 4</h1>

<?php
require "classes/personnage2.class.php";
                                                    //stactic method
    $perso = new Personnage2("Bobby", 25, "c.PNG", Personnage2::HOMME, 2);
    echo $perso->afficher_info_template();

    $perso1 = new Personnage2("Patricia", 45, "b.PNG", Personnage2::FEMME, 15);
    echo $perso1->afficher_info_template();
;?>


<?php
include("include/footer.php");
?>