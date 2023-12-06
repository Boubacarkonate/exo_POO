<?php
include("include/head.php");
include("include/header.php");
?>


<h1>POO 3</h1>

<?php
require "classes/personnage1.class.php";

$perso3 = new Personnage2("Bob", 75, "c.PNG", true, 25);
$perso3->nom = "Toto";                                      //ètant une propriété public, je peux directement les modifier

$perso3->afficher_info_template();

?>


<?php
include("include/footer.php");
?>
