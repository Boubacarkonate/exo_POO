<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>MYSQL - PDO</h1>
    <?php

    //variables contenant les infos de la base de données
        $host = 'localhost';
        $dbname = 'ganesh';
        $username = 'root';
        $password = '';

       
        try {
            //connexion à la BD
            $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

            //ajout d'attribut pour la gestion d'erreurs pour la connexion
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            //requête à effectuer
            $sql = "INSERT INTO user_pdo (nom, prenom, age) VALUES ('GABBAY', 'Henry', 50), ('DOE', 'John', 70)";
            
            //$connect utilise la méthode exec() pour exécuter la requête en BD 
            $connect->exec($sql);   
            
            //affchage du paragraphe si la requête est bien effectuée
            echo "<p style='color:green'> Data inserted successfully ! </p>";
            
        } catch (PDOException $e) {
             //message d'erreur
            die("Impossible de se connecter : " . $e->getMessage());    
        }
    ?>
</body>
</html>