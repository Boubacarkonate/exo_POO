<?php
require "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>FORMATION</h1>
            </div>
            <?php
            $sql = 'SELECT * FROM cours';
            $stmt = $PDO->prepare($sql);
            $stmt->execute();
            $formations = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($formations)

            // echo "<pre>";
            // print_r($formations);
            // echo "</pre>"
            ?>
        </div>
        <div class="row">
        <?php foreach ($formations as $value) : ?>
    <div class="col-md-4">
        <div class="card" style="width: 18rem;">
            <img src="uploads/<?= $value["image"] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> <?= $value["libelle"] ?> </h5>
                <p class="card-text"><?= $value["description"] ?></p>
                <?php
                $sql = "SELECT libelle FROM type WHERE id = :id_type";
                $stmt = $PDO->prepare($sql);
                $stmt->bindParam(':id_type', $value['id_type'], PDO::PARAM_INT);
                $stmt->execute();
                $type = $stmt->fetch(PDO::FETCH_ASSOC);
                ?>
                <h6><span class="badge text-bg-success"><?= $type["libelle"] ?></span></h6>
                <br>
                <a href="#" class="btn btn-primary text-end">Détails</a>
            </div>
        </div>
    </div>
<?php endforeach; ?>
            </div>
    </div>
</body>

</html>