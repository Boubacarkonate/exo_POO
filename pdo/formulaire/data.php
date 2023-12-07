<?php

//variables contenant les infos de la base de données
    $host = 'localhost';
    $dbname = 'cda_contact';
    $username = 'root';
    $password = '';

    try {
        //connexion à la BD
        $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

        //ajout d'attribut pour la gestion d'erreurs
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        //variables contenant données récupérées via le formulaire 
        $name = $_POST['name'];
        $email= $_POST['email'];
        $mtp = $_POST['password'];

        //mot de passe haché
        $password_hash = password_hash($mtp,PASSWORD_BCRYPT);

        //PREPARE STATEMENT (permet de mettre une couche supplémentaire de "sécu sql" car je n'envoie pas directement des valeurs directerement en BD)                                                         
        // $stmt = $connect->prepare("INSERT INTO register (name, email, password) VALUES (:nom, :mail, :pass) ");
        
        $stmt = $connect->prepare("INSERT INTO register (name, email, password) VALUES (?, ?, ?) ");         // méthode 2
                                                                                   
      
        
        // $stmt->execute([
        //     ":nom" => $name,
        //     ":mail" => $email,
        //     "pass" => $password_hash
        // ]);

        $stmt->execute(array($name, $email, $password_hash));          //méthode 2

        //affchage du paragraphe si la requête est bien effectuée
        echo "<p style='color:green'> Data inserted whith prepared query successfully ! </p>";
        
    } catch (PDOException $e) {
       //message d'erreur
        die("Impossible de se connecter : " . $e->getMessage());    
    }
?>

