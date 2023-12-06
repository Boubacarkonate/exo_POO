<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire POO</title>
    <style>
        h1{text-align: center; text-decoration: underline;} form{text-align: center; padding-top: 5%;} label{color: blue;}
    </style>
</head>
<body>
    <h1>FORMULAIRE EN POO</h1>
    <form action="" method="post">
        <p>
           <label for="nom">NOM</label> 
        </p>
        <p>
              <input type="text" name="nom" id="" placeholder="votre nom">
        </p>
        <p>
           <label for="email">EMAIL</label> 
        </p>
        <p>
              <input type="email" name="email" id="" placeholder="votre email">
        </p>
        <p>
           <label for="password">MOT DE PASSE</label> 
        </p>
        <p>
              <input type="password" name="password" id="" placeholder="votre mot de passe">
        </p>
        <p>
            <input type="submit" value="ENVOYER">
        </p>
    </form>
    <!-- <big>hello </big>
    <big>hello </big>
    <big>hello </big>
    <big>hello </big>
       <center>hello</center>  -->
    
    <?php 
    include "process.php"; 


    $db = new Database();

    $name = $_POST['nom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = password_hash($password,PASSWORD_BCRYPT);


    if (isset($name) && isset($email) && isset($password)) {
            $query = "INSERT INTO register (name,email, password) VALUES ('$name', '$email', '$password_hash')";
            
        $db->insert($query);
    }
    ?>
   
</body>
</html>