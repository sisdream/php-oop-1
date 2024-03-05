<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/db/Productions.php';
 
     
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <div class="container">
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Title</th>
                    <th scope="col">Original language</th>
                    <th scope="col">Duration</th>
                    <th scope="col">First release</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Vote</th>
                    <th scope="col">Best Seller</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productions as $production) : ?>
                    <tr>
                        <th><?= $production->type ?></th>
                        <td><?= $production->title ?></td>
                        <td><?= $production->og_language ?></td>
                        <td><?= $production->get_vote() ?></td>
                        <td><?php echo ($production->is_best_seller) ? 'YES' : 'NO' ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>