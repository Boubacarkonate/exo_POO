<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>MYSQL - PDO (marquages nommés :...)</h1>
    <?php

    //variables contenant les infos de la base de données
        $host = 'localhost';
        $dbname = 'ganesh';
        $username = 'root';
        $password = '';

        try {
            //connexion à la BD
            $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

            //ajout d'attribut pour la gestion d'erreurs
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //variables
            $nom = "GATTOUFI";
            $prenom = "Sarah";
            $age = 28;

            //PREPARE STATEMENT (permet de mettre une couche supplémentaire de "sécu sql" car je n'envoie pas directement des valeurs directerement en BD)                                                         
            $stmt = $connect->prepare("INSERT INTO user_pdo (nom, prenom, age) VALUES (:nom, :prenom, :age) ");
                                                                                        //marquages nommés = syntaxe sql qui signifie qu'il se remplacé par une variable avant d'être éxécuté
            //EXECUTE 
            $stmt->execute(array(
                ":nom" => $nom,
                ":prenom" => $prenom,
                ":age" => $age
            ));

            //affchage du paragraphe si la requête est bien effectuée
            echo "<p style='color:green'> Data inserted whith prepared query successfully ! </p>";
            
        } catch (PDOException $e) {
           //message d'erreur
            die("Impossible de se connecter : " . $e->getMessage());    
        }
    ?>
</body>
</html>