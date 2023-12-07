<?php
$host = 'localhost';
$dbname = 'cda_contact';
$username = 'root';
$password = '';
$id = $_GET['id'];


    $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

   $connect->query("DELETE from register where id=$id ");        
                                                                            
   

    header('Location: index.php');




