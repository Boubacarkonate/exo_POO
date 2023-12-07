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
        $host = 'localhost';
        $dbname = 'ganesh';
        $username = 'root';
        $password = '';

       
        try {
            
            $connect = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO user_pdo (nom, prenom, age) VALUES ('GABBAY', 'Henry', 50), ('DOE', 'John', 70)";
            $connect->exec($sql);                                                               
            echo "<p style='color:green'> Data inserted successfully ! </p>";
            
        } catch (PDOException $e) {
           
            die("Impossible de se connecter : " . $e->getMessage());    
        }
    ?>
</body>
</html>