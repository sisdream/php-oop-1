<?php
    require_once __DIR__ . '/db/Productions.php';
     
    class Production{
    public $type;
    public $title;
    public $og_language;
    public $vote;
    public $is_best_seller;

    function __construct(
        string $type,
        string $title,
        string $language,
        $vote = false
    ) {
        $this->type = $type;
        $this->title = $title;
        $this->og_language = $language;
        $this->vote = $vote;
        $this->set_best_seller();
    }

    public function set_best_seller()
    {
        $this->is_best_seller = $this->vote >= 8 ? true : false;
    }
    public function get_vote()
    {
        if ($this->vote == false) {
            return 'non ci sono voti per questo titolo';
        } else {
            return $this->vote;
        }
    }
}
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