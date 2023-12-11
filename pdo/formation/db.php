<?php
$host = 'localhost';
$dbname = 'formation';
$username = 'root';
$password = '';


try {

    $PDO = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
    // echo 'success';
} catch (PDOException $e) {
   
    echo "message d'erreur :".$e->getMessage();
}
