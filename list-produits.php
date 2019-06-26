<?php

require 'pdo.php';

$request = 'SELECT * FROM produit';

$response = $bdd->query($request);

$produits = $response->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <table class="table">

                    <thead>
                        <tr>
                            <th>id</th>
                            <th>titre</th>
                            <th>adresse_vendeur</th>
                            <th>ville_vendeur</th>
                            <th>cp_vendeur</th>
                            <th>prix</th>
                            <th>photo</th>
                            <th>type</th>
                            <th>description</th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php foreach ($produits as $p) : ?>

                            <tr>
                                <td><?= $p['id'] ?></td>
                                <td><?= $p['titre'] ?></td>
                                <td><?= $p['adresse_vendeur'] ?></td>
                                <td><?= $p['ville_vendeur'] ?></td>
                                <td><?= $p['cp_vendeur'] ?></td>
                                <td><?= $p['prix'] ?></td>
                                <td><img src="uploads/<?= $p['photo'] ?>" height="100"></td>
                                <td><?= $p['type'] ?></td>
                                <td><?= $p['description'] ?></td>
                            </tr>

                        <?php endforeach; ?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>