<?php

// 1°) Appel de fichiers externes par include => contrainte : si j'ai 500 fichiers appelés, je devrais faire 500 include
// include "classes/chat.php";
// include "classes/chien.php";
// include "classes/lapin.php";


// 2°) Appel de fichiers externes par la méthode magique autoload
//création de ma fonction avec un paramètre. Ce dernier représente le nom des fichiers qui sera dans l'instruction
function mon_autoloader($class){
    include "classes/$class.php";
}
//appel de la fonction
spl_autoload_register("mon_autoloader");


                        //////////////////////////////////////

$chat = new chat();
echo "ce chat en provenance de " .$chat->pays. " coûte ". $chat->prix;

echo "<br>";

$chien = new chien();
echo "ce chien en provenance de " .$chien->pays. " coûte ". $chien->prix;

echo "<br>";

$lapin = new lapin();
echo "ce lapin en provenance de " .$lapin->pays. " coûte ". $lapin->prix;