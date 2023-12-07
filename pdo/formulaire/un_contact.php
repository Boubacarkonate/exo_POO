<?php

$host = 'localhost';
$dbname = 'cda_contact';
$username = 'root';
$password = '';
$id = $_GET['id'];
try {
    //connexion à la BD
    $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

    $stmt = $connect->query("SELECT * FROM register WHERE id=$id ");         // méthode 2
                                                                            

   $result =  $stmt->fetch();    
} catch (PDOException $e) {
    //message d'erreur
     die("Impossible de se connecter : " . $e->getMessage());    
 }

// var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">

            <p class="card-text"><?= $result['name']?></p>
          </h5>
          <p class="card-text"><?= $result['email'] ?> </p>
          <p class="card-text"><?= $result['password'] ?> </p>


        </div>
      </div>
    </div>



</body>
</html>