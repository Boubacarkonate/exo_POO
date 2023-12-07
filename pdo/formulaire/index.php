<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <body> <!-- si attribut action est vide alors je peux rajouter $_SERVER['PHP_SELF'] pour appeler les mêmes pages. En effet le serveur de certains hébergeur n'accepte pas d'url vide -->
    <form action="index.php" method="post">
    <p>
           <label for="nom">NOM</label> 
        </p>
        <p>
              <input type="text" name="name" id="" placeholder="votre nom">
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
</body>
</html>