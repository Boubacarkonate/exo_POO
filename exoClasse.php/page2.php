<?php
include("include/head.php");
include("include/header.php");
?>


<h1>POO 2</h1>

<?php

require "classes/personnage1.class.php";

$perso1 = new Personnage1("john", 30, "a.PNG", true, 2);
$perso1->afficher_info_template();

$perso2 = new Personnage1("Patricia", 45, "b.PNG", false, 15);
$perso2->afficher_info_template();

$perso3 = new Personnage1("Bob", 75, "c.PNG", true, 25);
$perso3->afficher_info_template();

echo $perso1;     // fonctionne avec la méthode magique __tostring     


?>


<?php
include("include/footer.php");
?>