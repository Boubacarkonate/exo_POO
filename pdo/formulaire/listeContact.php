<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  foreach ($result as $contact) { ?> 
       

                   <p> <a href=un_contact.php?id=<?=$contact['id']?>>
                    <?=$contact['id']?>
                    <?=$contact['name']?></a>
                </p>

                
                <!-- <p><?=$contact['email'] ?></p> -->
                <!-- <p><?=$contact['password'] ?></p> -->
                <br />
                <a href="supprimerContact.php?id=<?=$contact['id']?>">
                SUPPRIMER CONTACT
                </a>
                <?php  echo "<hr>"; ?>
       
    <?php } ?>



  
</body>
</html>