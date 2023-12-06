<?php

$connect = mysqli_connect("localhost", "root","", "ganesh");

// $sql ='CREATE DATABASE `ganesh`';                //requête sql
// $db = mysqli_query($connect, $sql);              //mysqli_connect(database, requête) => prepare et execute la requête

// if ($connect) {
//     echo "success";
// } else {
//     echo "erreur";
// }

$table = "CREATE TABLE IF NOT EXISTS `user` (
    `id` int NOT NULL AUTO_INCREMENT,
    `nom` varchar(60) NOT NULL,
    `prenom` varchar(60) NOT NULL,
    `email` varchar(60) NOT NULL,
    `sujet` varchar(60) DEFAULT NULL,
    `message` text,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci";

$tableCreate = mysqli_query($connect, $table);      //mysqli_connect prepare et execute la requête

if ($tableCreate) {
    echo "success";
    } else {
        echo "erreur";
}